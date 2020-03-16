@extends('layouts.app')

@section('content')

<h1>Login</h1>

<form method="POST" action="{{ route('login') }}">
   @csrf
   <div>
       <div>
           <span class="fas fa-user"></span>
           <input id="email" type="text" name="email" placeholder="Email Address" />
            @if ($errors->has('email'))
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('email') }}</strong>
               </span>
           @endif
       </div>
       <div>
           <span class="fas fa-lock"></span>
           <input id="password" type="password" name="password" placeholder="Password" />
       </div>
       <button type="submit">LOGIN</button>
   </div>
</form>



@endsection
