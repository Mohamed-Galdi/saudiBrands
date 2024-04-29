<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class BrandController extends Controller
{
    public function categories()
    {
        return view('brands.categories');
    }
    public function listCafes()
    {
        $cafes = Brand::where('type', 'cafe')->get();
        return view('brands.cafes', compact('cafes'));
    }
    public function listPerfumes()
    {
        $perfumes = Brand::where('type', 'perfume')->get();
        return view('brands.perfumes', compact('perfumes'));
    }
    public function listRestaurants()
    {
        $restaurants = Brand::where('type', 'restaurant')->get();
        return view('brands.restaurants', compact('restaurants'));
    }
    public function listClothes()
    {
        $clothes = Brand::where('type', 'clothes')->get();
        return view('brands.clothers', compact('clothes'));
    }

    public function addFavorite(Request $request, Brand $brand)
    {
        // Check if the user is logged in and has the role 'customer'
        if (auth()->check() && auth()->user()->role === 'user') {
            // Add the brand to the user's favorites
            auth()->user()->favorites()->attach($brand->id);

            Alert::success('تمت الإضافة بنجاح');
            // Return a success message
            return redirect()->back();
        } else {
            // Return an error message if the user is not logged in or does not have the role 'customer'
            Alert::error('قم بتسجيل الدخول للإضافة للمفضلة');
            return redirect()->route('auth.choice');
        }
    }
    public function removeFavorite(Request $request, Brand $brand)
    {
        auth()->user()->favorites()->detach($brand->id);
        Alert::success('تمت الإزالة بنجاح');
        return redirect()->back();
    }

    public function addBrand(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand = new Brand();
        $brand->owner_id = Auth::id();
        $brand->name = $request->name;
        $brand->type = $request->type;
        if ($request->hasFile('image')) {
            // Remove unwanted characters from the brand name
            $clean_brand_name = preg_replace('/[^\w\s-]/', '', $request->brandName);
            $image_name = str_replace(" ", "_", $clean_brand_name) . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('brandsImages', $image_name, 'public');
            $brand->logo =  $path;
        }
        $brand->address = $request->address;
        $brand->save();

        Alert::success('تمت الإضافة بنجاح');
        return redirect()->back();
    }

    public function editBrand(Brand $brand){
        return view('brands.edit', compact('brand'));
    }
    public function updateBrand(Request $request, Brand $brand){
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'address' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand->name = $request->name;
        $brand->type = $request->type;
        if ($request->hasFile('image')) {
            $clean_brand_name = preg_replace('/[^\w\s-]/', '', $request->brandName);
            $image_name = str_replace(" ", "_", $clean_brand_name) . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('brandsImages', $image_name, 'public');
            $brand->logo =  $path;
        }
        $brand->address = $request->address;
        $brand->save();

        Alert::success('تم التعديل بنجاح');
        return redirect('/brand-owner-page');
    }

    public function deleteBrand(Brand $brand)
    {
        $brand = Brand::findOrFail($brand->id);
        // if ($brand->logo) {
        //     // Get the filename from the image path
        //     $filename = basename($brand->logo);

        //     // Delete the image file from the storage
        //     Storage::disk('public')->delete('brandImages/' . $filename);
        // }
        $brand->delete();

        Alert::success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
