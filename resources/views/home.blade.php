@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        You are logged in, {{auth::user()->name}}!
                        <br/>
                        <br/>
                        
                        <form 
                            method="POST"
                            action="/">
                        <div class="form-group">
                            @csrf
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Me an Email</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
