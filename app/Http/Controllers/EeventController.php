<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Event;
use App\Events\SendMail;
class EeventController extends Controller
{
    public function eventIndex()
    {
        SendMail::dispatch(new SendMail(1));
    }
}
