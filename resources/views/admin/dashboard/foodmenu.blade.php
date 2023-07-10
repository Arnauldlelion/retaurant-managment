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
  </div>
   @include("admin.dashboard.adminscript")
  </body>
</html> 