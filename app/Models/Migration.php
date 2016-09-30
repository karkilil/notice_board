<?php namespace Notice\Models;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model {

    /**
     * Generated
     */
    public $timestamps = false;

    protected $table = 'migrations';
    protected $fillable = ['migration', 'batch'];



}
