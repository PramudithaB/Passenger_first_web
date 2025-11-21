<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\RouteController;
use App\Models\Route87;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admindashboard()
    {
        $route87 = Route87::all();
        return view('admin.admindashboard', compact('route87'));
    }
  
}