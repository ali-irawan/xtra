@extends("xtra-view::layouts.basic")
@section("title","Login")
@section("content")
    <div class="container xtra-container">

        <div class="row">
            <div class="offset-4 col-4">

                <form action="{{ route('xtra-login-page') }}" method="post">
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
                </form>

            </div>
        </div>
    </div>
@endsection