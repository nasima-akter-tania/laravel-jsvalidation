<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table="posts";
    protected $primarykey="id";
    protected $fillable=['title','description','entry_by','status'];
    public function validate()
    {
    	return [
    				'title'=>'required',
                    'description'=>'required',
                    'entry_by'=>'required',
    				'status'=>'required'
    	];
    }

}


