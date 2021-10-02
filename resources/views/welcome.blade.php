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

    </style>
    <title>Test Registration Form</title>
</head>
<body>
    <div class="regform">
        @auth
        <h1>Home Page</h1>
        <h2>You are logged in as a user</h2>
        @endauth
        @guest
        <h3>You are not aunthenticated!</h3>
        @endguest
    </div>
</body>
</html>
