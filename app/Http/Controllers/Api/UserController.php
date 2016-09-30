<?php

namespace Notice\Http\Controllers\Api;

use Illuminate\Http\Request;

use Notice\Http\Requests;
use Notice\Http\Controllers\Controller;
use Notice\Models\Faculty;
use Notice\Models\Semester;
use Notice\Models\User;


/**
 * Class UserController
 * @package Notice\Http\Controllers\Api
 */
class UserController extends Controller
{
        
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getFaculty()
    {
        return Faculty::all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getSemester()
    {
        return Semester::all();
    }

    /**
     * @param Request $request
     * @return User
     */
    public function getRegister(Request $request)
    {
       // return $request->all();
 $user = new User();
       // return $user;
        $user->fname = $request->get('first_name');
        $user->mname = $request->get('middle_name');
        $user->lname = $request->get('last_name');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->semester_id = $request->get('semester');
        $user->role_type = 2;



        $user->save();
        return $user;






    }
}
