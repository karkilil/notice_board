<?php

namespace Notice\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('first_name','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label' => 'First Name',
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'First Name']
            ])
            ->add('last_name','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label' => 'Last name',
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'Last Name']
            ])
            ->add('address','text',[
                'label' => 'Address',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'Address']
            ])
            ->add('email','email',[
                'label' => 'Email',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'Email']
            ])
            ->add('username','text',[
                'label' => 'Username',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'Username']
            ])
            ->add('password','password',[
                'label' => 'Password',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'password']
            ])
            ->add('confirm_password','password',[
                'label' => 'Confirmed Password',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control','placeholder'=>'confirmed password']
            ])
            ->add('semester','select',[
                'choices' => ['first'=>'First Semester','second'=>'Second Semester','third'=>'Third Semester'],
                'empty_value'=>'Select Semester',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control']

            ])
            ->add('faculty','select',[
                'choices' => ['csit'=>'B.Sc.CSIT','bim'=>'BIM','bhm'=>'BHM'],
                'empty_value'=>'Select Faculty',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 label-control'],
                'attr'=>['class'=>'col-md-8 from-control']
            ])
            ->add('register','submit',[
            'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-primary']
            ]);

    }
}
