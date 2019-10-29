<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'color', 'description', 'id_kategori', 'tag_user', 'start_date', 'end_date', 'id_group', 'id_user'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function group()
    {
        return $this->belongsTo('App\Group', 'id_group');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
