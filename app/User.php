<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

protected $fillable = [
    'name', 'email', 'password'
]

protected $hidden = [
    'password', 'remember_token',
];

public function projects (){
    return  $this->hasMany('App\Project');
}