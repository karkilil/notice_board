<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessage extends Model {

    /**
     * Generated
     */
    public $timestamps = false;

    protected $table = 'tbl_message';
    protected $fillable = ['id', 'subject', 'body', 'created_date'];


    public function messageBoxes() {
        return $this->hasMany(\Notice\Models\MessageBox::class, 'msg_id', 'id');
    }


}
