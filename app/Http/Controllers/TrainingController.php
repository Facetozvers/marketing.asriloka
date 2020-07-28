<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Training;
use App\TrainingAudience;
use App\User;
class TrainingController extends Controller
{
    public function index(){
        $trainings = Training::where('status', 'Open')->where('tanggal','>=', date('Y-m-d'))->get();
        return view('training.index', ['trainings' => $trainings]);
    }

    public function detail($id){
        $training = Training::where('id', $id)->first();
        return view('training.detail', ['training' => $training]);
    }

    public function daftar(Request $request){
        //verify user
        $user = User::where('token', $request->token)->first();
        if($user->no_kepegawaian == Auth::user()->no_kepegawaian){
            $daftar_training = new TrainingAudience;
            $daftar_training->id_peserta = Auth::user()->no_kepegawaian;
            $daftar_training->id_training = $request->id;
            $daftar_training->kehadiran = 'Tidak Hadir';

            $daftar_training->save();

            if($daftar_training->save()){
                return redirect('/training')->with(['message' => 'Anda berhasil mendaftar!', 'alert-class' => 'alert-success']);
            }
            else
            {
                return redirect('/training')->with(['message' => 'Request gagal!', 'alert-class' => 'alert-danger']);
            }
        }
        else
            abort(404);
    }
}
