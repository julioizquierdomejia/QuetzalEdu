<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table = 'area_conocimiento';

	protected $fillable = ['area_conocimiento'];

	public function competencias(){

    	return $this->hasMany('App\Competencia');
    }

}
