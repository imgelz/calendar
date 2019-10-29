<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $fillable = ['subject', 'url', 'method', 'ip', 'agent', 'id_user', 'id_group'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function group()
    {
        return $this->belongsTo('App\Group', 'id_group');
    }
}
