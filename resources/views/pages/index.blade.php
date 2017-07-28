    @extends('layouts.app')
    
    @section('content')
       <div class="jumbotron text-center">
           <h1>Welcome to a Laravel App</h1>
           <p>This is the Laravel application i built from scratch</p>
           <p><a class="btn btn-primary btn-lg" href="/login" role="button"><i class="fa fa-key"></i> Login</a> <a class="btn btn-success btn-lg"href="/register" role="button"><i class="fa fa-user-plus"></i> Register</a></p>
       </div>
    @endsection