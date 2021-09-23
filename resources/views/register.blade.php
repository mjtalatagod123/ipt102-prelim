@extends('base')

@section('content')
<body>
    <style>
        body {
            background-image: url("background1.jpg");
            background-size: cover;
        }
    </style>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-5">
                <div class="card-header bg-dark text-white">
                    <h3 class="card-title">
                        User Registration
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/register')}}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pnumber">Phone Number</label>
                            <input type="pnumber" name="pnumber" id="pnumber" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    
@endsection