<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable= ['file'];

    protected $upload = '/Images/';

    public function getFileAttribute($photo){
        return $this->upload . $photo;
    }
}
