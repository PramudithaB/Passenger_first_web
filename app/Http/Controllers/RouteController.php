<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route87;

class RouteController extends Controller
{
    public function create87route()
    {
        return view('admin.create87route');
    }
    public function store87route(Request $request)
    {
        $route87 = new Route87();
        $route87->bus_number = $request->input('bus_number');
        $route87->bus_route = $request->input('bus_route');
        $route87->bus_type = $request->input('bus_type');
        $route87->colombo = $request->input('colombo');
        $route87->thelwatta = $request->input('thelwatta');
        $route87->chilow = $request->input('chilow');
        $route87->palawiya = $request->input('palawiya');
        $route87->puththalam = $request->input('puththalam');
        $route87->Anuradhapura = $request->input('Anuradhapura');
        $route87->madawachchiya = $request->input('madawachchiya');
        $route87->mannar = $request->input('mannar');
        $route87->vauniya = $request->input('vauniya');
        $route87->jaffna = $request->input('jaffna');
        $route87->save();
        

        return 'Route 87 details saved successfully!';
    }
    public function delete87($id)
{
    $route87 = Route87::find($id);

    if (!$route87) {
        return back()->with('error', 'Record not found');
    }

    $route87->delete();

    return back()->with('success', 'Route 87 record deleted successfully!');
}


  public function searchbuses(Request $request)
{
    $from = $request->input('from');
    $to = $request->input('to');
    $time = $request->input('time');

    // Start query
    $query = Route87::query(); // you had $route87 before — use $query

    if ($from) {
        $query->where('bus_route', 'like', '%' . $from . '%');
    }

    if ($to) {
        $query->where('bus_route', 'like', '%' . $to . '%');
    }

    if ($time) {
        $query->where(function($q) use ($time) {
            $q->where('colombo', '>=', $time)
              ->orWhere('thelwatta', '>=', $time)
              ->orWhere('chilow', '>=', $time)
              ->orWhere('palawiya', '>=', $time)
              ->orWhere('puththalam', '>=', $time)
              ->orWhere('Anuradhapura', '>=', $time)
              ->orWhere('madawachchiya', '>=', $time)
              ->orWhere('mannar', '>=', $time)
              ->orWhere('vauniya', '>=', $time)
              ->orWhere('jaffna', '>=', $time);
        });
    }

    $results = $query->get(); // Store the results in $results

    return view('welcome', compact('results')); // Pass $results to Blade
}


}
