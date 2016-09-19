<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model {

    /**
     * Generated
     */

    protected $table = 'semester';
    protected $fillable = ['semester_id', 'semester_name', 'faculty_id'];


    public function faculty() {
        return $this->belongsTo(\App\Models\Faculty::class, 'faculty_id', 'faculty_id');
    }

    public function users() {
        return $this->hasMany(\App\Models\User::class, 'semester_id', 'semester_id');
    }


}
