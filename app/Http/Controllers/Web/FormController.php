<?php

namespace Notice\Http\Controllers\Web;

use Illuminate\Http\Request;

use Kris\LaravelFormBuilder\FormBuilder;
use Notice\Http\Requests;
use Notice\Http\Controllers\Controller;

class FormController extends Controller
{
    public function register(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create(\Notice\Forms\RegisterForm::class);
        return view('frontend.register',compact('form'));
    }
    public function login(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create(\Notice\Forms\LoginForm::class);
        return view('frontend.login',compact('form'));
    }
}
