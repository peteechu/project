<!DOCTYPE html>
<html lang="en">
<head>
    <style type=text/css>

      .regform{
          background-color: white;
          margin: 200px;
          display: inline-block;
          width: 350px;
          align-items: center;
          text-align: center;
          padding: 10px;
      }

      body {
        background: #384047;
        font-family: sans-serif;
        font-size: 10px;
        text-align: center;
      }

      input {
          display: block;
          box-sizing: border-box;
          width: 100%;
          height: 50px;
          outline: none;
          margin-top: 10px;
      }
      button {
          width: 100%;
          margin-top: 10px;
          display: block;
          box-sizing: border-box;
          height: 50px;
      }

    </style>
    <title>Test Registration Form</title>
</head>
<body>
    <div class="regform">
        <h2>Register Form</h2>
         <form action="{{ route('register') }}" method="post">
            @csrf
             <input type="text" placeholder="Name" class="txt" name="name">
             @error('name')
                 <div style="color: red"> {{ $message }} </div>
             @enderror
             <input type="text" placeholder="Username" class="txt" name="username">
             @error('username')
                 <div style="color: red"> {{ $message }} </div>
             @enderror
             <input type="email" placeholder="Email" class="txt" name="email">
             @error('email')
                 <div style="color: red"> {{ $message }} </div>
             @enderror
             <input type="password" placeholder="Password" class="txt" name="password">
             @error('password')
                 <div style="color: red"> {{ $message }} </div>
             @enderror
             <input type="password" placeholder="Confirm Password" class="txt" name="password_confirmation">
             <button type="submit" name="submit">Create Account</button>
             <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
         </form>
    </div>
</body>
</html>
