@extends("xtra-view::layouts.basic")
@section("title","Login")
@section("content")
    <div class="container xtra-container">

        <div class="row">
            <div class="offset-4 col-4">

                <form action="{{ route(_XTRA_ROUTE_LOGIN) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" autofocus value="{!! old('email') !!}"/>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" />
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <button class="btn btn-primary">Sign In</button>
                    <a role="button" class="btn btn-link" href="{{ route(_XTRA_ROUTE_REGISTER) }}">Register</a>
                </form>

            </div>
        </div>
    </div>
@endsection