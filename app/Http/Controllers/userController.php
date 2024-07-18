<?php

namespace App\Http\Controllers;
use App\routes\web;
use App\Models\posts;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return posts::all();
    }
}

