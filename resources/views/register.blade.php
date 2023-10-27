<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
      <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
            padding:10px;
            text-align: center;
            width:400px;
            height: 500px;
        }

        .login-container h2 {
            font-size: 24px;
        }

        .form-group {
            margin: 10px 0;
            text-align: left;
            padding-right:30px;
            padding-left:30px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }
        .input-group {
            margin: 10px 0;
            text-align: left;
            padding-right:30px;
            padding-left:30px;
        }

        .input-group label {
            display: block;
            font-weight: bold;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 15px;
            padding:30px
        }

        .login-button {
            background-color: skyblue ;
            color: #fff;
            border:none;
            padding:10px; ;
            border-radius: 3px;
            cursor: pointer;
            margin-top:30px;
            
        }

        .login-button:hover {
            background-color: #0056b3;
        }
        .img{
            display: flex;
            background-color:skyblue;
            justify-content:auto;
            color:blue;
            width:400px;
            
        }
    </style>
</head>
<body>
    <div class="login-container">
    <div class="img">
            <h3>Welcome Back !</h3>
          <p>Sign in to continue to Skote.<p> 
    <img src="image/profile.img.jpg" alt="Image Description" style="width:40%">
    </div>
        <form method="POST" action="{{ route('log') }}">
            @csrf
            <div class="form-group">
                <label for="text">User name</label>
                <input type="text" name="user" id="user" value="{{ old('name') }}"placeholder="UserName" required autofocus>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline">button</i></button>
            </div>
            <div class="remember-me">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>
            <div class="login-button">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Login</button>
            </div>
            <div>
            <b>sign in with<b>
            </div>
        </form>
    </div>
</body>
</html>
