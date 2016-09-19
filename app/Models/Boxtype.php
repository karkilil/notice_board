<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boxtype extends Model {

    /**
     * Generated
     */

    protected $table = 'boxtype';
    protected $fillable = ['id', 'type_name'];


    public function messageBoxes() {
        return $this->hasMany(\App\Models\MessageBox::class, 'boxtype_id', 'id');
    }


}
