<?php

namespace Notice\Http\Controllers\Web;

use Illuminate\Http\Request;

use Kris\LaravelFormBuilder\FormBuilder;
use Notice\Http\Requests;
use Notice\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function layout(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create(\Notice\Forms\LoginForm::class);
        return view('frontend.home',compact('form'));
    }
    public function dashboard()
    {
        return view('backend.dashboard');
    }
    
}
