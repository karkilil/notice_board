<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */
    public $timestamps = false;

    protected $table = 'users';
    protected $fillable = ['user_id', 'fname', 'mname', 'lname', 'address', 'email', 'username', 'password', 'semester_id', 'role_type'];


    public function role() {
        return $this->belongsTo(\Notice\Models\Role::class, 'role_type', 'role_id');
    }

    public function semester() {
        return $this->belongsTo(\Notice\Models\Semester::class, 'semester_id', 'semester_id');
    }

    public function messages() {
        return $this->hasMany(\Notice\Models\Message::class, 'user_id', 'user_id');
    }

    public function messageBoxes() {
        return $this->hasMany(\Notice\Models\MessageBox::class, 'user_id', 'user_id');
    }

    public function notices() {
        return $this->hasMany(\Notice\Models\Notice::class, 'user_id', 'user_id');
    }


}
