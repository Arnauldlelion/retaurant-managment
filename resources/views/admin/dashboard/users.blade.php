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
    <h1 style="position:relative; top:60px; right:-60px" >Users:</h1>
  <div style="position:relative; top:70px; right:-70px">
    <table bgcolor="black" border="3px">
        <tr>
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Email</th>
            <th style="padding: 30px;">Action</th>
        </tr>
        @foreach ($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            @if($data->usertype=="0")
            <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
            @else
            <td><a >Not allowed</a></td>
            @endif
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