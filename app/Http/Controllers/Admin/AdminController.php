<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;
use App\Models\RegisterUser;
use DB;

class AdminController extends Controller
{
    //

    public function index(){
        return view('backend.index');
    }

    public function login(){
        return view('backend.login');
    }

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required'
        ]);

        // dd($request->all());
        // Check if Captcha is correct
        if ($request->input('captcha') !== Session::get('captcha')) {
            return back()->withErrors(['captcha' => 'Captcha is incorrect.']);
        }

        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                
                $admin = Auth::guard('admin')->user();
                
                // Allow access if role is 2 or 3
                if ($admin->role == 1 || $admin->role == 3) {
                    return redirect()->route('admin.dashboard');
                } else {
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error', 'You are not authorized to access the admin panel.');
                }
            } else {
                return redirect()->route('admin.login')->with('error', 'Either Email/Password is Incorrect');
            }
        } else {
            Session::forget('captcha');
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }


    public function generateCaptcha()
    {
        $captchaBuilder = new CaptchaBuilder;

        $captchaBuilder->setPhrase(mt_rand(1000, 9999)); 

        $captchaBuilder->build($width = 120, $height = 40, $font = null);
        
        $captchaBuilder->setMaxBehindLines(0);

        Session::put('captcha', $captchaBuilder->getPhrase());

        return response()->stream(function () use ($captchaBuilder) {
            return $captchaBuilder->output();
        }, 200, ['Content-Type' => 'image/jpeg']);
    }


    public function logout(){
        $admin =Auth::guard('admin')->logout();
        return redirect()->route('admin.login');

    }


    public function enquiry(){
        $enquiryList = DB::table('enquiry')->get();
        return view('backend.enquiry',compact('enquiryList'));

    }
    // public function user_list(){
    //     $UserList = DB::table('register_users')->get();
    //     return view('backend.registered_user',compact('UserList'));

    // }

    public function user_list() {
        $UserList = RegisterUser::all();
        return view('backend.registered_user', compact('UserList'));
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:register_users,id',
            'status' => 'required|in:pending,approved,cancel'
        ]);

        DB::table('register_users')
            ->where('id', $request->user_id)
            ->update(['status' => $request->status, 'updated_at' => now()]);

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    public function registerUserdlt($id)
    {
        RegisterUser::find($id)?->delete(); // Soft delete
        return redirect()->back()->with('success', 'User deleted successfully!');
    }

}
