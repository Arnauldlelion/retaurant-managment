<!DOCTYPE html>
<html lang="en">
  <head>

  </head>
  <body>

  <!DOCTYPE html>
<html lang="en">
  <head>
 @include("admin.dashboard.admincss")
  </head>
  <body>
<div class="container-scroller">
    @include("admin.dashboard.navbar")
    <h1  >Users</h1>
  <div style="position:relative; top:60px; right:-60px">
    <table bgcolor="grey" border="3px">
        <tr>
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Email</th>
            <th style="padding: 30px;">Action</th>
        </tr>
        @foreach ($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td><a href="#">Delete</a></td>
        </tr>
        @endforeach
    </table>
  </div>
    
   
</div>
   @include("admin.dashboard.adminscript")
  
  </body>
</html>

 
  </body>
</html>