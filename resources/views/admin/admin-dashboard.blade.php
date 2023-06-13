@extends('layouts.admin.main')
@section('main-container')
<div class="center mt-4">
    <h1 style="margin-left: 40%; margin-top:20%">Hello, {{ Auth::user()->name }}!</h1>
</div>    
@endsection
