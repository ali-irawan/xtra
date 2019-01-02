@extends("xtra-view::layouts.basic")
@section("title","Register")
@section("content")
    <div class="container xtra-container">

        <div class="row">
            <div class="offset-4 col-4">

                <form action="{{ route(_XTRA_ROUTE_REGISTER) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{!! old('name') !!}"/>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{!! old('email') !!}"/>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" />
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" />
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                    <button class="btn btn-primary">Register</button>
                </form>

            </div>
        </div>
    </div>
@endsection