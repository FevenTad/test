<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //we can manipulate the table from here
    //to change table name
    protected $table = 'posts';
    //to change primary key
    public $primarykey = 'id';
    //timestamp by default true
    public $timestamp = true;

    public function users(){
        return $this->belongsTo('App\User');
    }
}
