<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug', 'foto', 'keterangan'];
    public $timestamps = true;

    public function event()
    {
        return $this->hasMany('App\Event', 'id_kategori');
    }
}
