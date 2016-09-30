<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model {

    /**
     * Generated
     */
    public $timestamps = false;

    protected $table = 'semester';
    protected $fillable = ['semester_id', 'semester_name', 'faculty_id'];


    public function faculty() {
        return $this->belongsTo(\Notice\Models\Faculty::class, 'faculty_id', 'faculty_id');
    }

    public function users() {
        return $this->hasMany(\Notice\Models\User::class, 'semester_id', 'semester_id');
    }


}
