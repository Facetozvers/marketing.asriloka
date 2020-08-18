<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Listing;
use App\TransaksiProperti;
use App\Training;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listings = Listing::where('lister_id', Auth::user()->no_kepegawaian)->orderBy('created_at', 'DESC')->limit(5)->get();
        $transactions = TransaksiProperti::where('sales_id', Auth::user()->no_kepegawaian)->orWhere('lister_id', Auth::user()->no_kepegawaian)->limit(4)->get();
        $trainings = Training::where('status', 'Open')->where('tanggal','>=', date('Y-m-d'))->get();
        return view('dashboard', ['listings' => $listings, 'transactions' => $transactions, 'trainings' => $trainings]);
    }

    public function changePasswordPage(){
        return view('change_password');
    }

    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");
    }

    public function knowledgebase(){
        return view('knowledgebase');
    }
}
