
<x-app-layout >
  
   </x-app-layout>
   
<!DOCTYPE html>
<html lang="en">
  <head>
    
   
    @include('admin.admincss')
  </head>
  <body>
    
  <div class="container-scroller">
      @include('admin.navbar')
      <div style="position:relative; top:60px; width:75%; left:70px;background-color: white;">
      <table class="table table-striped">
      <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($user as $user)
  <tbody>
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      @if($user->usertype=='user')
      <td><a href="{{url('/delete_user',$user->id)}}" class="btn btn-outline-danger" onclick="return confirm ('are you sure to delete?')">Delete</a></td>
      @else
      <td><a  class="btn btn-outline-danger">Not allowed</a></td>
      @endif
    </tr>
  </tbody>
  @endforeach
</table>
      </div>
          
    </div>
    @include('admin.adminscript')
    
  </body>
</html>