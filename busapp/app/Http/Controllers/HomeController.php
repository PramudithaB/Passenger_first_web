<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\RouteController;
use App\Models\Route87; // Assuming this model connects to your bus route data
use Illuminate\Http\Request;

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

    // New function to handle bus search requests
  // In app/Http/Controllers/HomeController.php

// ... other methods ...
// In app/Http/Controllers/HomeController.php

// ...
// In app/Http/Controllers/HomeController.php

public function search_results()
{
    // Fetches ALL records from the route87s table.
    // This is useful for displaying a full list, but not a filtered search.
    $availableRoutes = Route87::all(); 
    
    // You also need to define placeholder variables for the search inputs
    // or the 'search_results.blade.php' view (which uses $from, $to, $time) will crash.
    $from = 'All Routes';
    $to = 'All Destinations';
    $time = null;

    // Correct syntax for compact:
    return view('search_results', compact('availableRoutes', 'from', 'to', 'time'));
}

// app/Http/Controllers/HomeController.php

// ... (other code)

// app/Http/Controllers/HomeController.php

public function searchBus(Request $request)
{
    $from = $request->input('from'); // e.g., 'colombo'
    $to = $request->input('to');     // e.g., 'chilow'
    $time = $request->input('time'); // e.g., '00:05:00'

    // The bus must depart from the 'from' point AFTER the requested time.
    // The columns in your database are named after the stops.
    $query = Route87::query()
        // 1. Where the departure time from the STARTING POINT is known (not NULL)
        ->whereNotNull($from)
        
        // 2. Where the departure time from the DESTINATION POINT is known (not NULL)
        // This ensures the bus runs the full route.
        ->whereNotNull($to)

        // 3. Where the bus departure time at the 'from' column 
        //    is greater than or equal to the requested time.
        // NOTE: The `$from` variable is safely being used as the column name here.
        ->where($from, '>=', $time) 
        
        // 4. (Optional but good for efficiency) Only look for buses where the destination time 
        //    is later than the origin time, preventing database data entry errors.
        ->whereRaw("TIME($to) > TIME($from)"); 

    // The old complex time logic (lines 114-116 in your original code) is no longer needed
    // for the main time constraint, as point 3 handles it directly:
    // ->where($from, '>=', $time)

    $availableRoutes = $query->get();

    return view('search_results', compact('availableRoutes', 'from', 'to', 'time'));
}
}