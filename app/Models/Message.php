<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * Generated
     */

    protected $table = 'message';
    protected $fillable = ['message_id', 'message_desc', 'user_id'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'user_id');
    }


}
