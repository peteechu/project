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
        <h2>Login Form</h2>
         <form action="{{ route('login') }}" method="post">
            @csrf
            @if (session('status'))
                 <div style="color: red"> {{ session('status') }} </div>
            @endif
             <input type="text" placeholder="Email" class="txt" name="email">
             @error('email')
                 <div style="color: red"> {{ $message }} </div>
             @enderror
             <input type="password" placeholder="Password" class="txt" name="password">
             @error('password')
                 <div style="color: red"> {{ $message }} </div>
             @enderror
             <button type="submit" name="submit">Login Account</button>
         </form>
    </div>
</body>
</html>
