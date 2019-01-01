@extends("xtra-view::layouts.basic")
@section("title","Register")
@section("content")
    <div class="container xtra-container">

        <div class="row">
            <div class="offset-4 col-4">

                <form action="{{ route('xtra-login-page') }}" method="post">
                    {{ csrf_token() }}
                    <div class="form-group">
                        <label>Email/Username</label>
                        <input type="text" class="form-control" name="username" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" />
                    </div>
                    <button class="btn btn-primary">Sign In</button>
                </form>

            </div>
        </div>
    </div>
@endsection