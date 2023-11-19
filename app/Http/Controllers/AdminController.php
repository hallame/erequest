<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Complaint;
use App\Models\Certificate;
use App\Models\Diploma;
use App\Models\Student;
use App\Models\Admin;
use App\Models\Transcript;
use App\Models\Image;

class AdminController extends Controller
{
    //

    public function dashboard(){
        return view ('admin.dashboard');
    }

    public function error401(){
        return view ('admin.error401');
    }

    public function error404(){
        return view ('admin.error404');
    }

    public function error500(){
        return view ('admin.error500');
    }

    public function complaint_form(){
        return view ('admin.complaint_form');
    }

    public function complaints(){
        return view ('admin.complaints');
    }

    public function charts(){
        return view ('admin.charts');
    }

    public function certificate_form(){
        return view ('admin.certificate_form');
    }

    public function diplomas(){
        return view ('admin.diplomas');
    }

    public function messages(){
        return view ('admin.messages');
    }

    public function message_form(){
        return view ('admin.message_form');
    }

    public function transcript_form(){
        return view ('admin.transcript_form');
    }


    public function login(){
        return view ('admin.login');
    }

    public function password(){
        return view ('admin.password');
    }

    public function register(){
        return view ('admin.register');
    }


    public function tables(){
        return view ('admin.tables');
    }
}
