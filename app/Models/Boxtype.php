<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Boxtype extends Model {

    /**
     * Generated
     */
    public $timestamps = false;
    protected $table = 'boxtype';
    protected $fillable = ['id', 'type_name'];


    public function messageBoxes() {
        return $this->hasMany(\Notice\Models\MessageBox::class, 'boxtype_id', 'id');
    }


}
