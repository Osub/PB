<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Increade;
use App\Http\Requests;

class IncreadeController extends Controller
{
    public function index()
    {
        return Increade::where('id',1)->increment('t',5);
    }
}
