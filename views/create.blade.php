@extends('layouts.app')
@section('content')

<!-- Material form register -->
<div class="container mt-5 col-6">
    <div class="card  m-auto">
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Create Member</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-5">

            <!-- Form -->
            <form style="color: #757575;" action="{{route('store')}}" method="POST">
               
                {{ csrf_field() }}
                
                
                <div class="form-group">
                    <!-- First name -->
                    <label for="materialRegisterFormFirstName">Full name</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <!-- E-mail -->
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required>

                </div>

                <!-- Password -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                    type="submit">Sign
                    in</button>

            </form>
            <!-- Form -->

        </div>

    </div>
</div>
<!-- Material form register -->

@endsection