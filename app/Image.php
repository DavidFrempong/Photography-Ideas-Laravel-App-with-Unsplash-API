<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model{
    protected $fillable = ['image_url', 'image_information', 'project_id'];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}