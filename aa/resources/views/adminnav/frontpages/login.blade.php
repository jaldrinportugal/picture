@extends('layout.admin')

@section('content')
    <Style>
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
            margin-top: 5rem;
        }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .landingpage a{
            float: right;
            margin-right: 3rem;
            font-size: 18px;
        }
    </Style>
    
    <div class="landingpage">
        <a href="{{route('landingpage')}}">Landing Page</a>
    </div>
    

    <form action="{{route('login.submit')}}" method="post">
        <h1>ADMIN</h1>
        @error('message')
            <span style="color:red">{{$message}}</span>
        @enderror

        @csrf
        <div>
            <input type="text" name="username" id="username" required placeholder="Username">
        </div>
        <div>
            <input type="password" name="password" id="password" required placeholder="Password">
        </div>
        <br>
        <div>
            <button>Login</button>
        </div>
    </form>
@endsection

@section('title')
    Login Page
@endsection
