@extends('layouts.app')

@section('content')
<div class="card-body">
    <form 
        method="POST"
        action="/contact">
    <div class="form-group">
        @csrf
            <label for="Email">Email address</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            @error('email')
                     <small class="form-text text-muted">{{ $message }}</small>
            @enderror
        </div>
        @if(session('message'))
             <div>
            {{session('message')}}
             </div>
        @endif
        <button type="submit" class="btn btn-primary">Send Me an Email</button>

    </form>
</div>
@endsection