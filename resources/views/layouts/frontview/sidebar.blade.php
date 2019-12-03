<div class="col-md-4">
    <div class="card bg-primary text-center card-form">
        <div class="card-body">
            <h3 class="text-white">Sign In</h3>
            <form action="{{ url('signin') }}" method="post">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn btn-dark">
                </fieldset>
            </form>
        </div>
    </div>
</div>
