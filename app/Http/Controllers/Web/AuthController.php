<?php

namespace Notice\Http\Controllers\Web;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Kris\LaravelFormBuilder\FormBuilder;
use Notice\Http\Requests;
use Notice\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showRegisterForm(FormBuilder $formBuilder,Request $request)
    {
//        for selecting facluty
//        print_r(config('app.REST_API'));die();
        $client = new Client(['base_uri'=>config('app.REST_API')]);

        $response = $client->request('GET','faculty');
        $dataf = $response->getBody()->getContents();
        $faculties = \GuzzleHttp\json_decode($dataf);
//        print_r($faculties);die();

//        for selecting semester
        $response = $client->request('GET','semester');
        $datas = $response->getBody()->getContents();
        $semeters = \GuzzleHttp\json_decode($datas);

        $form=$formBuilder->create(\Notice\Forms\RegisterForm::class,[
            'method' => 'POST',
            'url' => 'userRegister'
            ],
            ['faculties'=>$faculties,'semesters'=>$semeters]);

//        print_r('lil');die();
//        print_r($request->getMethod());die();
        if($request->getMethod()=='POST')
        {
           // print_r($request->get('first_name'));die();
            try{
                $response = $client->request('POST','register',[
                    'form_params' =>[
                        'first_name' => $request->get('first_name'),
                        'middle_name' => $request->get('middle_name'),
                        'last_name'  => $request->get('last_name'),
                        'address' => $request->get('address'),
                        'email' => $request->get('email'),
                        'username' => $request->get('username'),
                        'password' => $request->get('password'),
                        'faculty' => $request->get('faculty'),
                        'semester' => $request->get('semester')
                    ]


                ]);
                $user=\GuzzleHttp\json_decode($response->getBody()->getContents());
                
                return redirect()->route('home',compact('user'));
               // print_r($response); die();
                
                
            }
            catch (\Exception $e){
                print_r($e->getMessage());die();
            }
//            print_r($response);die();
            
        }

        return view('frontend.register',compact('form'));
    }

}
