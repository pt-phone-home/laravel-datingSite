<div class="col-md-4">
    @if (empty(Auth::check()))

    <div class="card bg-primary text-center card-form">
        <div class="card-body">
            <h3 class="text-white">Sign In</h3>

            @if (Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">x
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </button>
                </div>
            @endif
            <form action="{{ url('signin') }}" method="post">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn btn-dark">
                </fieldset>
            </form>
        </div>
    </div>

    @else

    <p class="link">
        <a href="{{ url('/phase/2') }}">Add Profile</a>
    </p>

    @endif
</div>
