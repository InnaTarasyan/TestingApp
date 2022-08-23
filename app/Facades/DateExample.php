<?php

namespace App\Facades;
use Carbon\Carbon;

class DateExample
{
    /**
     * @param $date
     * @return string
     */
    public function dateFormatYMD($date)
    {
        return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }

    /**
     * @param $date
     * @return string
     */
    public function dateFormatMDY($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m/d/Y');
    }
}