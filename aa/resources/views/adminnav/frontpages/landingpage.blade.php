@extends('layout.admin')

@section('content')
<style>
    h1{
        text-align: center;
    }

    .login a{
        float: right;
        margin-right: 2rem;
        font-size: 25px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="login">
    <a href="{{route('login')}}"><i class="glyphicon glyphicon-user"></i></a>
</div>
<h1>You are on the Landing Page</h1>
@endsection

@section('title')
Landing Page
@endsection
