<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model {

    /**
     * Generated
     */

    protected $table = 'faculty';
    protected $fillable = ['faculty_id', 'faculty_name'];


    public function semesters() {
        return $this->hasMany(\Notice\Models\Semester::class, 'faculty_id', 'faculty_id');
    }


}
