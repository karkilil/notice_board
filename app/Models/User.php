<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'user';
    protected $fillable = ['user_id', 'fname', 'lname', 'image', 'username', 'password', 'semester_id', 'role_type'];


    public function role() {
        return $this->belongsTo(\App\Models\Role::class, 'role_type', 'role_id');
    }

    public function semester() {
        return $this->belongsTo(\App\Models\Semester::class, 'semester_id', 'semester_id');
    }

    public function messages() {
        return $this->hasMany(\App\Models\Message::class, 'user_id', 'user_id');
    }

    public function messageBoxes() {
        return $this->hasMany(\App\Models\MessageBox::class, 'user_id', 'user_id');
    }

    public function notices() {
        return $this->hasMany(\App\Models\Notice::class, 'user_id', 'user_id');
    }


}
