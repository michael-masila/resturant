
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
</head>
<body>
<div class="container-scroller">
@include('admin.navbar')

<div class="container">
<div class="form-container">
    <h2>Food Items</h2>
    <form action="{{url('/post_food')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="price">Price(ksh):</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<div class="table-container">
    <h2>Submitted Items</h2>
    <table id="itemsTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
            </tr>
        </thead>
      <tbody>

      
      </tbody>
    </table>
</div>

</div>
</div>
@include('admin.adminscript')
</body>
</html>
