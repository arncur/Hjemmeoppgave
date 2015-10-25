<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background: #FFE0E0;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            form {
                background: #f5f5f5;
                margin: 20px;
                border: 0px;
                border-radius: 5px;
                padding: 10px;
                margin: 20px auto;
            }

            button[type="submit"]{
                background: #FF6666;
                border: 0px;
                border-radius: 5px;
                color: #ffffff;
                padding: 10px;
                margin: 20px auto;
            }

            button[type="logout"]{
                background: #FF6666;
                border: 0px;
                border-radius: 5px;
                color: #ffffff;
                padding: 10px;
                margin: 20px auto;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
                <form method="POST" action="/auth/login">
                {!! csrf_field() !!}


                    <div>
                        <h1>Login</h1>
                    </div>

                    <div>

                        <h3>Email</h3>
                        <input type="email" name="email" value="{{ old('email') }}">
                     </div>

                    <div>
                        <h3>Password</h3>
                        <input type="password" name="password" id="password">
                    </div>

                    <div>
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div>
                        <button type="submit">Login</button>
                    </div>


                </form>

                <form method="GET" action="/auth/register">
                    {!! csrf_field() !!} 
                    <h4>Not a user? Register here</h4>

                    <button type="logout">Register</button>

                </form>

            </div>
        </div>
    </body>
</html>

