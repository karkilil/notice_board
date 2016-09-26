<?php

namespace Notice\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('username','text',[
            'label' => 'Username',
            'wrapper'=>['class'=>'form-group'],
            'label_attr'=>['class'=>'input-group'],
            'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'Username']
    ])
            ->add('password','password',[
                'label' => 'Password',
                'wrapper'=>['class'=>'form-group'],
                'label_attr'=>['class'=>'input-group'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'password']
        ])
            ->add('Log In','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-success']
            ]);
    }
}
