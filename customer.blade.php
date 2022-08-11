<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .required label::after{
            content: " *";
            color: red;
        }
       
    </style>
    <title>Form</title>
</head>
  <body class="bg-dark">
  <div class="navbar navbar-expand-sm" style="padding-left:80px;">
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
                        <a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer/view')}}" style="color: white">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
  <form action="{{$url}}" method="post">
   @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}
            </h3>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Name:</label>
                        <input type="text" name="name" id="" class="form-control" value="{{$customer->name}}">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                     </div>
                
                    <div class="form-group col-md-6 required">
                        <label for="">Email:</label>
                        <input type="text" name="email" id="" class="form-control" value="{{$customer->email}}">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Password:</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                     </div>
                
                    <div class="form-group col-md-6 required">
                        <label for="">Confirm Password:</label>
                        <input type="password" name="confirm_password" id="" class="form-control">
                        <span class="text-danger">
                            @error('confirm_password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Country:</label>
                        <input type="text" name="country" id="" class="form-control" value="{{$customer->country}}">
                        <span class="text-danger">
                            @error('country')
                            {{$message}}
                            @enderror
                        </span>
                     </div>
                
                    <div class="form-group col-md-6 required">
                        <label for="">State:</label>
                        <input type="text" name="state" id="" class="form-control" value="{{$customer->state}}">
                        <span class="text-danger">
                            @error('state')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Address:</label>
                        <input type="text" name="address" id="" class="form-control" value="{{$customer->address}}">
                        <span class="text-danger">
                            @error('address')
                            {{$message}}
                            @enderror
                        </span>
                     </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6 required">
                            <label for="">Gender:</label>
                         <input type="radio" name="gender" value="male" 
                         {{$customer->gender == "male" ? "checked" : ""}}>
                         <label for="">Male</label>
                         <input type="radio" name="gender" value="female"
                         {{$customer->gender == "female" ? "checked" : ""}}>
                         <label for="">Female</label>
                         <input type="radio" name="gender" value="others"
                         {{$customer->gender == "others" ? "checked" : ""}}>
                         <label for="">Others</label>
                       
                            <span class="text-danger">
                                @error('gender')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    
                        <div class="form-group col-md-6 required">
                            <label for="">Date of Birth:</label>
                            <input type="date" name="dob" id="" class="form-control" value="{{$customer->dob}}">
                            <span class="text-danger">
                                @error('date')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
              
            </form>
  </body>
</html>
