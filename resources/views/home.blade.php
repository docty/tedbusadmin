@extends('layouts.app')

@section('content')
<div>
     <div>Dashboard</div>
     
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
        <input type="submit" value="Logout" name="">
    </form>
                                
     
</div>
@endsection
