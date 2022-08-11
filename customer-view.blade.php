<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>View Page</title>
</head>
<body>

    <div class="navbar navbar-expand-sm" style="background: black; padding-left:80px;">
            <a class="navbar-brand" href="#" style="color: white">Rakesh Raut</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-expand="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsebleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer')}}" style="color: white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer/view')}}" style="color: white">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <a href="{{url('/customer')}}">
                <button class="btn btn-primary d-inline-block m-2 float-right" style="float:right;">Add</button>
            </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Date Of Birth</th>
                    <th>Status</th>
                    <th style="padding-left:40px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>
                        @if($customer->status == "1")
                        <span style="background:green;" class="badge badge-success">Active</span>
                        @else
                        <span style="background: red;" class="badge badge-danger">Offline</span>
                        @endif
                    </td>
                    <td>
                       <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"> <button style="float:left;"class="btn btn-danger">Delete</button></a>
                       <a href="{{url('/customer/edit/')}}/{{$customer->customer_id}}"> <button style="margin-left:5px;" class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
