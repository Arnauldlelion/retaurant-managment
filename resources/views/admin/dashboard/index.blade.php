<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('admin_asset/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Back Office</title>
</head>
<body>
@include('admin.layout.sidebar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>Restaurant Summary</h3>
                <!-- Display summary of restaurant information such as revenue, number of orders, etc. -->
            </div>
            <div class="col-md-6">
                <h3>Recent Orders</h3>
                <!-- Display a table of the most recent orders with details such as order number, customer name, total price, etc. -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Menu Items</h3>
                <!-- Display a list of all menu items with details such as name, price, and availability -->
            </div>
            <div class="col-md-6">
                <h3>Reservations</h3>
                <!-- Display a table of upcoming reservations with details such as reservation date, time, and number of guests -->
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>