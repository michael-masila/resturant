<x-app-layout >
  
   </x-app-layout>
   
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <!-- plugins:css -->
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
  </head>
  <body>
  <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
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





    <h2>Reservations</h2>
    <table id="itemsTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>No_Guests</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reserve as $reserve)
            <!-- Table rows will be added here dynamically -->
            <tr>
                <td>{{$reserve->name}}</td>
                <td>{{$reserve->email}}</td>    
                <td>{{$reserve->phone}}</td>
                <td>{{$reserve->no_guests}}</td>
                <td>{{$reserve->date}}</td>
                <td>{{$reserve->time}}</td>
                <td>{{$reserve->message}}</td>
                
                
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>












    @include('admin.adminscript')
  </div>
  </body>
</html>