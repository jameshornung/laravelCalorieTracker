<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
	public $fillable = [
        'Meal', 'Calories',
    ];
	    public function meal(){
		return $this->belongsTo(User::class);
	}
}
