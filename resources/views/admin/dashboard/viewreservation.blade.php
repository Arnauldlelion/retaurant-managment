<!DOCTYPE html>
<html lang="en">
  <head>
 @include("admin.dashboard.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.dashboard.navbar")
  
   <table bgcolor="black">
    <tr align="center">
      <th bgcolor="sky blue" style="padding: 20px;">Name</th>
      <th bgcolor="sky blue" style="padding: 20px;">email</th>
      <th bgcolor="sky blue" style="padding: 20px;">phone</th>
      <th bgcolor="sky blue" style="padding: 20px;">guest</th>
      <th bgcolor="sky blue" style="padding: 20px;">date</th>
      <th bgcolor="sky blue" style="padding: 20px;">time</th>
      <th bgcolor="sky blue" style="padding: 20px;">message</th>
    </tr>

    @foreach($data as $data)
    <tr align="center">
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
     <td>{{$data->phone}}</td>
     <td>{{$data->guest}}</td>
     <td>{{$data->date}}</td>
     <td>{{$data->time}}</td>
     <td>{{$data->message}}</td>
   
    </tr>

    @endforeach
   </table>
   </div>
                  
  
   @include("admin.dashboard.adminscript")
  </body>
</html>