<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model {

    /**
     * Generated
     */

    protected $table = 'notice';
    protected $fillable = ['notice_id', 'title', 'description', 'published_date', 'user_id'];


    public function user() {
        return $this->belongsTo(\Notice\Models\User::class, 'user_id', 'user_id');
    }


}
