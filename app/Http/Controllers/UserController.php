<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        $user->save();

        Alert::success('تم إنشاء الحساب بنجاح');
        return redirect('/user-login');
    }
    public function storeBrandOwner(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', Rules\Password::defaults()],
            'brandName' => 'required|string|max:255',
            'type' => 'required|in:clothes,perfumes,cafe,restaurant|',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'brand',
        ]);
        $user->save();
        $brand = new Brand();
        $brand->owner_id = $user->id;
        $brand->name = $request->brandName;
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

        Alert::success('تم إنشاء الحساب بنجاح');
        return redirect('/brand-login');
    }

    public function userLogin(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('user.page');
    }
    public function brandOwnerLogin(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('brandOwner.page');
    }
    public function adminLogin(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('admin.page');
    }

    public function userPage()
    {
        $user = Auth::user();
        $brands = $user->favorites;
        return view('user.user_page', compact('brands'));
    }
    public function brandOwnerPage()
    {
        $user = Auth::user();
        // dd($user);
        $brands = $user->brands;
        return view('user.brand_owner_page', compact('brands'));
    }

    public function adminPage()
    {
        return view('user.admin_page');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
