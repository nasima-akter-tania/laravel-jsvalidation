<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
  protected $table='crud_table';
  protected $primaryKey='id';
  protected $fillable=['first_name','last_name','father_name','gender','phone','status','secrate_key'];
  
  public function validate_data(){
    return [
        'first_name'=>'required',
        'last_name'=>'required',
        'gender'=>'required',
        'phone'=>'required'
    ];

  }
}
