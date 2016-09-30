<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * Generated
     */
    public $timestamps = false;

    protected $table = 'message';
    protected $fillable = ['message_id', 'message_desc', 'user_id'];


    public function user() {
        return $this->belongsTo(\Notice\Models\User::class, 'user_id', 'user_id');
    }


}
