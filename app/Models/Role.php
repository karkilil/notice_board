<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Generated
     */
    public $timestamps = false;

    protected $table = 'role';
    protected $fillable = ['role_id', 'role_name', 'role_type', 'role_title', 'permission'];


    public function users() {
        return $this->hasMany(\Notice\Models\User::class, 'role_type', 'role_id');
    }


}
