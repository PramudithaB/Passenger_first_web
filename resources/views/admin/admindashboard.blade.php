<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: row;
        }
        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #1f2937;
            color: white;
            min-height: 100vh;
            padding: 20px 0;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #374151;
        }
        /* Content */
        .content {
            flex: 1;
            padding: 20px;
            background-color: #f3f4f6;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center">Admin</h2>
        <a href="#">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Products</a>
        <a href="#">Orders</a>
        <a href="{{route('create87route')}}">87</a>
        <a href="#">Logout</a>
<a href="{{ route('welcome') }}">Home Page</a>

    </div>

    <!-- Content -->
    <div class="content">
        <h1>Dashboard</h1>
        <div class="row">
         
         
        </div>

        <div class="card p-3">
            <h4>Jaffna/Vauniya/A.pura 87/04 Colombo Buses</h4>
            <table class="table table-striped">
                <thead>
                    
                    <tr>
                        
                        <th>bus_number</th>
                        <th>bus_route</th>
                        <th>bus_type</th>
                        <th>colombo</th>
                        <th>thelwatta</th>
                        <th>Chilow</th>
                        <th>palawiya</th>
                        <th>puththalam</th>
                        <th>Anuradhapura</th>
                        <th>madawachchiya</th>
                        <th>mannar</th>
                        <th>vauniya</th>
                        <th>jaffna</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                    <tbody>
    @foreach ($route87 as $route87)
    <tr>
        <td>{{ $route87->bus_number }}</td>
        <td>{{ $route87->bus_route }}</td>
        <td>{{ $route87->bus_type }}</td>
        <td>{{ $route87->colombo }}</td>
        <td>{{ $route87->thelwatta }}</td>
        <td>{{ $route87->chilow }}</td>
        <td>{{ $route87->palawiya }}</td>
        <td>{{ $route87->puththalam }}</td>
        <td>{{ $route87->Anuradhapura }}</td>
        <td>{{ $route87->madawachchiya }}</td>
        <td>{{ $route87->mannar }}</td>
        <td>{{ $route87->vauniya }}</td>
        <td>{{ $route87->jaffna }}</td>
       <td>
    
        <form action="{{ route('route87.delete', $route87->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
            Delete
        </button>
    </form>

</td>

    </tr>
    @endforeach
</tbody>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
