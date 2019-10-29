<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['nama_grup', 'kode'];
    public $timestamps = true;

    public function user()
    {
        return $this->hasMany('App\User', 'id_group');
    }

    public function event()
    {
        return $this->hasMany('App\Event', 'id_group');
    }

    public function log()
    {
        return $this->hasMany('App\LogActivity', 'id_group');
    }
}
