<!DOCTYPE html>
<html lang="en">
  <head>
 @include("admin.dashboard.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.dashboard.navbar")
   <div style="position:relative; top:70px; right:-150px">

    <form action="{{route('uploadfood')}}" method="post" enctype="multipart/form-data">

    @csrf

    <label>Title</label>
    <input type="text" name="title" placeholder="write a title" required><br>
    <div>
    <label>Price</label>
    <input type="num" name="price" placeholder="price" required><br>
    </div>

    <div>
    <label>Image</label>
    <input type="file" name="image" required><br>
    </div>

    <div>
    <label>Description</label>
    <input type="text" name="description" placeholder="write a description" required><br>
    </div>

  

   <div>
   <input type="submit" value="save">
   </div>
   </form>
<div>
   <table bgcolor="black">
    <tr>
      <th style="padding: 30px;">Food Name</th>
      <th style="padding: 30px;">Price</th>
      <th style="padding: 30px;">Description</th>
      <th style="padding: 30px;">Image</th>
      <th style="padding: 30px;">Action</th>
      <th style="padding: 30px;">Action2</th>
    </tr>

    @foreach($data as $data)
    <tr align="center">
      <td>{{$data->title}}</td>
      <td>{{$data->price}}</td>
     <td>{{$data->description}}</td>
     <td><img height="150" width="150" src="/foodimage/{{$data->image}}"</td>
     <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
     <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
    </tr>

    @endforeach
   </table>
   </div>

  </div>
   @include("admin.dashboard.adminscript")
  </body>
</html> 