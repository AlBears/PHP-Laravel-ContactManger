@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="jumbotron text-center">
            <h1>Hello, {{ Auth::user()->name }}!</h1>
            <p class="lead">
              Welcome Back to Contact Manager App
            </p>
            <p>
              <a href="{{ route('contacts.index') }}" class="btn btn-primary btn-lg">Manage Your Contacts</a>
            </p>
          </div>
        </div>
    </div>
</div>
@endsection
