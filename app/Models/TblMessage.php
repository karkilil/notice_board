<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessage extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_message';
    protected $fillable = ['id', 'subject', 'body', 'created_date'];


    public function messageBoxes() {
        return $this->hasMany(\App\Models\MessageBox::class, 'msg_id', 'id');
    }


}
