<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Upline;

class DownlineController extends Controller
{
    public function index(){
        //cari upline
        $upline = Upline::where('user_id', Auth::user()->no_kepegawaian)->join('users','uplines.upline_id','=','users.no_kepegawaian')->select('uplines.*', 'users.name','users.phone_number','users.email','users.referral_code', 'users.no_kepegawaian')->first();
        $downlines = Upline::where('upline_id', Auth::user()->no_kepegawaian)->join('users','uplines.user_id','=','users.no_kepegawaian')->select('uplines.*', 'users.name','users.phone_number','users.email','users.level','users.referral_code')->get();

        return view('upline', ['upline' => $upline, 'downlines' => $downlines]);
    }
}
