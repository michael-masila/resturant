
<!DOCTYPE html>
<html lang="en">
  
<head>
<x-app-layout >
  
  </x-app-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    @include('admin.admincss')
    <style>
        .form-container
        {
          margin-left: px;
          width: 30%;
          padding: 20px;
          border-radius: 5px;
        }

        .form-container h2, .table-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #45a049;
        }
         .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="file"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            color: #45a049;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            color: #45a049;
            
            
        }
        th {
            background-color: #f2f2f2;
        }
        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 70%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <!-- Include Bootstrap CSS -->
   

</head>
<body>
<div class="container-scroller">
@include('admin.navbar')

<div class="container">


<div class="table-container">
<!-- message displayed when deleting an item 
@if(session()->has('message'))
<div class="alert alert-success text-center">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {{ session()->get('message') }}
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {{ session()->get('error') }}
</div>
@endif-->





    <h2>Available Menu Food Items</h2>
    <table id="itemsTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($showfood as $showfood)
            <!-- Table rows will be added here dynamically -->
            <tr>
                <td>{{$showfood->title}}</td>
                <td>{{$showfood->price}}</td>
                <td> <img class="img_design" src="postimage/{{ $showfood->image }}" alt="{{ $showfood->title }}"></td>
                <!--<td>{{$showfood->description}}</td>-->
                <td>{{ \Illuminate\Support\Str::limit($showfood->description, 100, $end='...') }}</td>
                
                <td><a href="{{url('/delete_item',$showfood->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete the item?')">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
@include('admin.adminscript')
</body>
</html>
