<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin/dashboard');
    }

    // public function destroy(Request $request)
    // {

    //     // Get the authenticated admin user
    //     $user = $request->user();

    //     Auth::guard('admin')->logout();

    //     $user->delete();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     // return Redirect::to('/');
    //     // return redirect('/');
    // }

    //AdminProfile
    public function AdminProfile()
    {
        $id = Auth::guard('admin')->user()->id;
        $profileData = Admin::find($id);

        // $roles = Role::latest()->get();

        return view('admin.pages.profile.admin_profile', compact('profileData'));
    }

    //AdminProfileUpdate
    public function AdminProfileUpdate(Request $request)
    {
        // Log the current admin session and request data for debugging
        Log::info('Admin Profile Update Request', [
            'admin_id' => Auth::guard('admin')->user()->id,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        if (!Auth::guard('admin')->check()) {
            Log::error('Admin not logged in.');
            return redirect()->route('admin.login')->with('error', 'You are not logged in');
        }

        try {
            $id = Auth::guard('admin')->user()->id;
            $update = Admin::findOrFail($id);

            // Update the admin profile data
            $update->name = $request->name;
            $update->company_name = $request->company_name;
            $update->email = $request->email;
            $update->phone = $request->phone;
            $update->address = $request->address;

            // Handle file upload if a new photo is provided
            if ($request->file('photo')) {
                $file = $request->file('photo');
                @unlink(public_path('upload/admin_images/' . $update->photo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/admin_images/'), $filename);
                $update['photo'] = $filename;
            }

            $update->save();
            Log::info('Admin Profile Updated Successfully', ['admin_id' => $update->id]);

            return redirect()->back()->with('success', 'Profile Updated Successfully');
        } catch (\Exception $e) {
            Log::error('Error during profile update', [
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    //Admin Password
    public function AdminPasswordPage()
    {
        $id = Auth::guard('admin')->user()->id;
        $profileData = Admin::find($id);

        return view('admin.pages.profile.admin_password', compact('profileData'));
    }

    //Admin Password Update
    public function AdminPasswordUpdateSubmit(Request $request)
    {
        //validate
        $request->validate([

            'old_password' => 'required',
            'new_password' => [

                'required',
                'confirmed',
                Rules\Password::min(8)->mixedCase()->symbols()->letters()->numbers(),

            ],
        ]);

        //Match Old Password
        if (!Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {

            // toastr()->error('Old Password Not Match!');
            flash()->success('Old Password Not Match!');

            return redirect()->back();
        }

        //Update New Password
        Admin::whereId(Auth::guard('admin')->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        // toastr()->success('');
        // flash()->success('Password Change SUccessfully!!');

        return redirect()->back()->with('success', 'Password Change Succeesfully');
    }
}
