<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
 @include("admin.dashboard.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.dashboard.navbar")
    <div style="position:relative;  top:70px; right:-150px">

<form  action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">

@csrf

<label>Title</label>
<input type="text" name="title" value="{{$data->title}}" required><br>
<div>
<label>Price</label>
<input type="num" name="price" value="{{$data->price}}" required><br>
</div>


<div>
<label>Description</label>
<input type="text" name="description" value="{{$data->description}}" required><br>
</div>

<div>
<label>Old Image</label>
<img height="150" width="150" src="/foodimage/{{$data->image}}"
</div>

<div>
<label>New Image</label>
<input type="file" name="image" required><br>
</div>

<div>
<input type="submit" value="save">
</div>
</form>
<div>

  </div>
   @include("admin.dashboard.adminscript")
  </body>
</html>