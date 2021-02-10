<?php

use Carbon\Carbon;


function formatDate($date, $oldFormat, $newFormat)
{
    return Carbon::createFromFormat($oldFormat, $date)->format($newFormat);
}

function authUser()
{
   return auth()->user();
}