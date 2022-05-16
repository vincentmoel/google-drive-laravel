@extends('template.main')

@section('container')

    <div class="card text-center py-4 make-middle bg-light" style="width: 20rem; max-height: 290px !important" >
        <div class="card-body">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>

        </div>
    </div>

    <style>
        body{
            background: #161c2d;
        }
        .make-middle {
            
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
        }

    </style>


    <script>

    </script>
@endsection
