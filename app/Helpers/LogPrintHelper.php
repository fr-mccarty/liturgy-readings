<?php

namespace App\Helpers;

class LogPrintHelper
{
    public static function logPrint($liturgy)
    {

        \DB::table('log_prints')->insert([
            'ip_address' => request()->ip(),
            'content' => json_encode($liturgy),
            'user_agent' => request()->userAgent(),
        ]);

    }

}
