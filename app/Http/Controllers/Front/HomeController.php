<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterUser;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    //
    public function index(){
        return view('frontend.home');
    }

    public function about(){
        return view('frontend.about');
    }

    public function team(){
        return view('frontend.team');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function contact(){
        return view('frontend.contact');
    }
    
    public function blog(){
        return view('frontend.blog');
    }
    
    public function register(){
        return view('frontend.register');
    }

    public function allCourse(){
        return view('frontend.courses.all_course');
    }
    public function ot(){
        return view('frontend.courses.ot');
    }

    public function opthemic(){
        return view('frontend.courses.opthemic');
    }
    public function emt(){
        return view('frontend.courses.emt');
    }
    public function dmit(){
        return view('frontend.courses.dmit');
    }
    public function ctmr(){
        return view('frontend.courses.ct_mr');
    }
    public function dresser(){
        return view('frontend.courses.dresser');
    }

    // public function registerStore(Request $request)
    // {
    //     // Validate basic fields
    //     $request->validate([
    //         'name' => 'required',
    //         'aadhar' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         // 'image' => ,
    //         // 'sign' => 'required|image|mimes:jpg,jpeg,png',
    //     ]);

    //     // Image Upload
    //     $imageName = null;
    //     if ($request->hasFile('image')) {
    //         $imageName = time() . 'image.' . $request->image->extension();
    //         $request->image->move(public_path('uploads/images'), $imageName);
    //     }

    //     // Sign Upload
    //     $signName = null;
    //     if ($request->hasFile('sign')) {
    //         $signName = time() . 'sign.' . $request->sign->extension();
    //         $request->sign->move(public_path('uploads/signs'), $signName);
    //     }

    //     // Store data into register_user table
    //     DB::table('register_users')->insert([
    //         'course' => $request->course,
    //         'name' => $request->name,
    //         'aadhar' => $request->aadhar,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'fname' => $request->fname,
    //         'mname' => $request->mname,
    //         'gender' => $request->gender,
    //         'dob' => $request->dob,
    //         'nation' => $request->nation,
    //         'religion' => $request->religion,
    //         'disability' => $request->disability,
    //         'disadvantaged' => $request->disadvantaged,
    //         'medium' => $request->medium,
    //         'pin' => $request->pin,
    //         'city' => $request->city,
    //         'state' => $request->state,
    //         'address' => $request->address,
    //         'image' => $imageName,
    //         'sign' => $signName,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     return redirect()->back()->with('success', 'Form submitted successfully!');
    // }

    public function registerStore(Request $request)
    {
        // Validate basic fields
        $request->validate([
            'name' => 'required',
            'aadhar' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // 'image' => ,
            // 'sign' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_image.' . $request->image->extension();
            $request->image->move(public_path('uploads/images'), $imageName);
        }

        // Sign Upload
        $signName = null;
        if ($request->hasFile('sign')) {
            $signName = time() . '_sign.' . $request->sign->extension();
            $request->sign->move(public_path('uploads/signs'), $signName);
        }

        // Generate Unique ID like STU202504160001
        $date = now()->format('Y'); // e.g. 20250416
        $lastId = DB::table('register_users')->max('id') + 1;
        $uniqueId = 'KIIMS' . $date . str_pad($lastId, 4, '0', STR_PAD_LEFT);

        // Store data into register_user table
        DB::table('register_users')->insert([
            'enrol_id' => $uniqueId,
            'course' => $request->course,
            'name' => $request->name,
            'aadhar' => $request->aadhar,
            'email' => $request->email,
            'phone' => $request->phone,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'nation' => $request->nation,
            'religion' => $request->religion,
            'disability' => $request->disability,
            'disadvantaged' => $request->disadvantaged,
            'medium' => $request->medium,
            'pin' => $request->pin,
            'city' => $request->city,
            'state' => $request->state,
            'address' => $request->address,
            'image' => $imageName,
            'sign' => $signName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!')->with('enrol_id', $uniqueId);
    }


    // public function searchByEnrollment(Request $request)
    // {
    //     $enrol_id = $request->input('enrol_id');

    //     $UserList = RegisterUser::where('enrol_id', $enrol_id)
    //                             ->where('status', 'approved')
    //                             ->get();

    //     if ($UserList->count() > 0) {
    //         return redirect()->back()->with('swal_message', [
    //             'type' => 'success',
    //             'title' => 'Approved',
    //             'text' => 'Enrollment ID is Approved!',
    //         ]);
    //     } else {
    //         return redirect()->back()->with('swal_message', [
    //             'type' => 'error',
    //             'title' => 'Not Approved',
    //             'text' => 'This Enrollment ID is not approved or not found.',
    //         ]);
    //     }
    // }

    // public function searchByEnrollment(Request $request)
    // {
    //     $enrol_id = $request->input('enrol_id');

    //     $user = RegisterUser::where('enrol_id', $enrol_id)
    //                 ->where('status', 'approved')
    //                 ->first();

    //     if ($user) {
    //         return view('frontend.home', [
    //             'user' => $user,
    //             'swal_message' => [
    //                 'type' => 'success',
    //                 'title' => 'Approved!',
    //                 'text' => 'Your enrollment is approved.'
    //             ]
    //         ]);
    //     } else {
    //         return back()->with('swal_message', [
    //             'type' => 'error',
    //             'title' => 'Not Approved',
    //             'text' => 'No approved record found for this enrollment ID.'
    //         ]);
    //     }
    // }

    public function searchByEnrollment(Request $request)
    {
        $enrol_id = $request->input('enrol_id');

        $user = RegisterUser::where('enrol_id', $enrol_id)
                    ->where('status', 'approved')
                    ->first();

        if ($user) {
            // success message ko session me pass karke with() se redirect karein
            return redirect()->back()->with([
                'user_data' => $user,
                'swal_message' => [
                    'type' => 'success',
                    'title' => 'Enrollment Approved!',
                    'text' => 'Your enrollment ID is approved.'
                ]
            ]);
        } else {
            return redirect()->back()->with([
                'swal_message' => [
                    'type' => 'error',
                    'title' => 'Not Approved',
                    'text' => 'No approved record found for this enrollment ID.'
                ]
            ]);
        }
    }



    public function enquiry(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Insert into DB
        DB::table('enquiry')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Return with SweetAlert success
        return redirect()->back()->with('success', 'Enquiry submitted successfully!');
    }


    public function verify(){
        return view('frontend.verify');
    }
}
