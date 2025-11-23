<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\RouteController;
use App\Models\Route87; 
use Illuminate\Http\Request;
use Carbon\Carbon; // Ensure Carbon is imported for time calculations

class HomeController extends Controller
{
    public function admindashboard()
    {
        $route87 = Route87::all();
        return view('admin.admindashboard', compact('route87'));
    }

    public function welcome(){
      return view('welcome');
    }

    public function search_results()
    {
        // This method shows a safe fallback if called directly
        $availableRoutes = collect([]); 
        
        $from = 'All Routes';
        $to = 'All Destinations';
        $time = null;

        return view('search_results', compact('availableRoutes', 'from', 'to', 'time'));
    }

    public function searchBus(Request $request)
    {
        $from = $request->input('from'); 
        $to = $request->input('to');     
        $time = $request->input('time'); // Time in HH:MM format (e.g., '23:55')

        // 1. Convert input time to HH:MM:SS format
        $search_time_string = $time . ':00'; // e.g., '23:55:00'

        // 2. Adjust search time backwards by 5 minutes to catch recently departed buses (e.g., 23:45 bus when searched at 23:55)
        // This relies on Carbon for time arithmetic before converting back to a string.
        $search_start_carbon = Carbon::createFromTimeString($search_time_string)->subMinutes(5);
        $adjusted_start_time_string = $search_start_carbon->format('H:i:s'); // e.g., '23:50:00'

        $query = Route87::query()
            // Mandatory checks to prevent PHP TypeErrors in the Blade view
            ->whereNotNull($from) 
            ->whereNotNull($to) 
            // Sanity check: ensure destination time is later than origin time
            ->whereRaw("TIME($to) > TIME($from)"); 

        // --- FINAL FIX: MIDNIGHT WRAPAROUND LOGIC ---
        
        // We trigger the OR WHERE logic if the adjusted search time is late in the day (e.g., after 11 PM),
        // covering the time range where the 00:00:00 bus might be missed.
        if ($adjusted_start_time_string >= '23:00:00') {
            // Case: Search is near midnight (e.g., 23:50:00). We need two ranges.
            $query->where(function ($q) use ($from, $adjusted_start_time_string) {
                // Range 1: Buses leaving from the adjusted time up to midnight (e.g., >= 23:50:00)
                $q->where($from, '>=', $adjusted_start_time_string) 
                  // Range 2: OR Buses leaving from midnight (00:00:00) up to a reasonable time the next day (e.g., up to 04:00:00)
                  // The '04:00:00' boundary ensures we catch the 12:00 AM bus and early morning buses.
                  ->orWhere($from, '<=', '04:00:00'); 
            });
        } else {
            // Case: Standard daytime search. Only need buses leaving after the adjusted start time.
            $query->where($from, '>=', $adjusted_start_time_string); 
        }
        // ------------------------------------

        $availableRoutes = $query->get();

        // Pass the original search time back for display
        return view('search_results', compact('availableRoutes', 'from', 'to', 'time'));
    }
    public function news(){
        return view('news');
    }
}