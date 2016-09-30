<?php

namespace Notice\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
//        for faculty
        $faculties = $this->getData('faculties');
        $facultyOptions = [];
//        print_r($faculties);die();
        foreach($faculties->faculties as $faculty)
        {
           $facultyOptions[$faculty->faculty_id]=$faculty->faculty_name;
        }

//        for semester
        $semesters = $this->getData('semesters');
        $semesterOptions = [];
//        print_r($semesters);die();
        foreach ($semesters->semesters as $semester)
        {
            $semesterOptions[$semester->semester_id]=$semester->semester_name;
        }

        $this
            ->add('first_name','text',[
                'wrapper' => ['class'=>'form-group row'],
                'label' => 'First Name',
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr' => ['class'=>'col-md-7 form-control','placeholder'=>'First Name'],
                'rules' => 'required|min:3|max:32'
            ])
            ->add('middle_name','text',[
                'wrapper' => ['class'=>'form-group row'],
                'label' => 'Middle Name',
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr'=>['class' => 'col-md-7 form-control','placeholder'=>'Middle Name'],
                'rules' => 'required|min:3|max:32'
            ])

            ->add('last_name','text',[
                'wrapper' => ['class'=>'form-group row'],
                'label' => 'Last Name',
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr'=>['class' => 'col-md-7 form-control','placeholder'=>'Last Name'],
                'rules' => 'required|min:3|max:32'
            ])
            ->add('address','text',[
                'label' => 'Address',
                'wrapper' => ['class'=>'form-group row'],
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr' => ['class'=>'col-md-7 form-control','placeholder'=>'Address'],
                'rules' => 'required|min:3|max:32'
            ])
            ->add('email','email',[
                'label' => 'Email',
                'wrapper' => ['class'=>'form-group row'],
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr' => ['class'=>'col-md-7 form-control','placeholder'=>'Email'],
                'rules' => 'required|email|unique:users,email'
            ])
            ->add('username','text',[
                'label' => 'Username',
                'wrapper' => ['class'=>'form-group row'],
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr' => ['class'=>'col-md-7 form-control','placeholder'=>'Username'],
                'rules' => 'required|min:6|max:32'
            ])
            ->add('password','password',[
                'label' => 'Password',
                'wrapper' => ['class'=>'form-group row'],
                'label_attr' => ['class'=>'col-md-4 control-label'],
                'attr' => ['class'=>'col-md-7 form-control','placeholder'=>'Password'],
                'rules' => 'required|min:6|max:64'
            ])
            ->add('faculty','select',[
                'choices' => $facultyOptions,
                'empty_value'=>'Select Faculty',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']
            ])
            ->add('semester','select',[
                'choices' => $semesterOptions,
                'empty_value'=>'Select Semester',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('register','submit',[
            'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-primary']
            ]);

    }
}
