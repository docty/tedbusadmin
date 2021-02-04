@extends('layouts.app')

@section('content')
        
        <div class="login-wrapper">
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
						<form method="POST" action="{{ route('login') }}" id="loginForm" novalidate>
							@csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Email Address</label>
                                <input id="email" type="text" name="email" placeholder="Email Address" class="form-control">
								 @if ($errors->has('email'))
								   <span class="invalid-feedback" role="alert">
									   <strong>{{ $errors->first('email') }}</strong>
								   </span>
							   @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input id="password" type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-add">Login</button>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
@endsection