<?php

namespace App\Helpers;

use Request;
use App\LogActivity as LogActivityModel;
use Auth;

class LogActivity
{
    public static function addToLog($subject)
    {
        $log = [];
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['id_user'] = Auth::user()->id;
        $log['id_group'] = Auth::user()->id_group;
        LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }
}
