<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $fillable = ['subject', 'url', 'method', 'ip', 'agent', 'id_user'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
