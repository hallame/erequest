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

class UserController extends Controller
{
    //

    public function certificate_process(){
        return view ('user.certificate_process');
    }


    public function certificate_form(){
        return view ('user.certificate_form');
    }

    public function already_exists(){
        return view ('user.already_exists');
    }

    public function certificat_redirect(){
        return view ('user.certificat_redirect');
    }


    public function change_password_sucess(){
        return view ('user.change_password_sucess');
    }


    public function complaint_form(){
        return view ('user.complaint_form');
    }

    public function complaint_index(){
        return view ('user.complaint_index');
    }


    public function complaint_process(){
        return view ('user.complaint_process');
    }

    public function contact(){
        return view ('user.contact');
    }


    public function diploma_form(){
        return view ('user.diploma_form');
    }

    public function diploma_process(){
        return view ('user.diploma_process');
    }

    public function diploma_redirect(){
        return view ('user.diploma_redirect');
    }


    public function error(){
        return view ('user.error');
    }

    public function false_form_filled(){
        return view ('user.false_form_filled');
    }

    public function forgot_password(){
        return view ('user.forgot_password');
    }


    public function invalid_credential(){
        return view ('user.invalid_credential');
    }


    public function invalid_or_expiry(){
        return view ('user.invalid_or_expiry');
    }

    public function login(){
        return view ('user.login');
    }


    public function message_sucess(){
        return view ('user.message_sucess');
    }

    public function not_found(){
        return view ('user.not_found');
    }


    public function process(){
        return view ('user.process');
    }

    public function payment_sucess(){
        return view ('user.payment_sucess');
    }

    public function register(){
        return view ('user.register');
    }


    public function send_verification_code(){
        return view ('user.send_verification_code');
    }


    public function test_certificate(){
        return view ('user.test_certificate');
    }

    public function test_diploma(){
        return view ('user.test_diploma');
    }

    public function test(){
        return view ('user.test');
    }


    public function transcript_form(){
        return view ('user.transcript_form');
    }


    public function transcript_redirect(){
        return view ('user.transcript_redirect');
    }

    public function test_transcript(){
        return view ('user.test_transcript');
    }


    public function transcript_process(){
        return view ('user.transcript_process');
    }

    public function index_redirect(){
        return view ('user.index_redirect');
    }



}
