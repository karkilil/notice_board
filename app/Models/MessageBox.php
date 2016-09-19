<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageBox extends Model {

    /**
     * Generated
     */

    protected $table = 'message_box';
    protected $fillable = ['id', 'boxtype_id', 'msg_id', 'user_id'];


    public function boxtype() {
        return $this->belongsTo(\App\Models\Boxtype::class, 'boxtype_id', 'id');
    }

    public function tblMessage() {
        return $this->belongsTo(\App\Models\TblMessage::class, 'msg_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'user_id');
    }


}