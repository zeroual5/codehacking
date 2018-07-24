<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\SluggableInterface;
//use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model //implements SluggableInterface
{
//    use SluggableTrait;
//    protected $sluggable = [
//        'build_from' => 'title',
//        'save_to' => 'slug',
//        'on_update' => false,
//    ];

//    use Sluggable;
//    use SluggableScopeHelpers;
////    protected $slugKeyName = 'slug';
//
//    public function sluggable()
//    {
//        return [
//            'slug' => [
//                'source' => 'title'
//            ]
//        ];
//    }

    protected  $fillable =[
        'id','user_id',
        'category_id',
        'photo_id',
        'title',
        'body'
    ];


    public function user(){
        return $this->belongsTo('App\user');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function category(){
        return $this->belongsTo('App\category');
    }
}
