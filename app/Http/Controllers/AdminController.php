<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Brand;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function adminLogin(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('admin.brands');
    }

    public function adminBrands()
    {
        $brands = Brand::all();
        return view('admin.admin_brands_page', compact('brands'));
    }

    public function adminUsers()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.admin_users_page', compact('users'));
    }

    public function editUser(User $user)
    {
        return view('admin.edit_user', compact('user'));
    }
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);

        $user->name = $request->name;
        $user->role = $request->role;

        $user->email = $request->email;
        $user->save();

        Alert::success('تم التعديل بنجاح');
        return redirect()->route('admin.users');
    }

    public function deleteUser(User $user)
    {
        $user = User::findOrFail($user->id);
        $user->delete();
        Alert::success('تم الحذف بنجاح');
        return redirect()->back();
    }
    
    public function editBrand(Brand $brand)
    {
        return view('admin.edit_brand', compact('brand'));
    }
    public function updateBrand(Request $request, Brand $brand)
    {
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
        return redirect()->route('admin.brands');
    }

    public function deleteBrand(Brand $brand)
    {
        $brand = Brand::findOrFail($brand->id);
        $brand->delete();

        Alert::success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
