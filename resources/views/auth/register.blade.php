
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=9">
        <meta name="author" content="Neud Tesfay Desta">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Login | 100TEFL</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="../css/icon-font.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="shortcut icon" href="http://100tefl.com/images/favicon.ico" sizes="32x32" type="image/png" >
    </head>
    
   <body>
       <div class="row">
            <div class="card_login">
                <div class="card_login--front">
                    <div class="row">
                        <h2 class="heading-tertiary u-center-text u-margin-bottom-medium">
                            Login
                        </h2>
                    </div>
                    
                    <form method="post" class="u-center-text" id="loginForm" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="name">Name:</label>
                            </div>
                            <div class="col-2-of-3">
                                <input type="email" name="name" id="name" placeholder="Your Name" required value="{{ old('name') }}">
                            </div>
                        </div>
                        @if ($errors->has('name'))
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="emailerror"> Error : </label>
                            </div>
                            <div class="col-2-of-3">
                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('name') }}</strong>
                                    </span>
                                
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="email">Email:</label>
                            </div>
                            <div class="col-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Your Email" required value="{{ old('email') }}">
                            </div>
                        </div>
                        @if ($errors->has('email'))
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="emailerror"> Error : </label>
                            </div>
                            <div class="col-2-of-3">
                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="password">Password:</label>
                            </div>
                            <div class="col-2-of-3">
                                <input type="password" name="password" id="password" placeholder="Your Password" required>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="password">Error : </label>
                            </div>
                            <div class="col-2-of-3">
                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                                    </span>
                                
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="password-confirm">Password Confirm:</label>
                            </div>
                            <div class="col-2-of-3">
                                <input type="password" name="password_confirmation" id="password-confirm"  placeholder="Confrim Password" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="admin-password">Admin Password:</label>
                            </div>
                            <div class="col-2-of-3">
                                <input type="password" name="admin-password" id="admin-password" placeholder="Admin Password" required>
                            </div>
                        </div>
                        @if ($errors->has('admin-password'))
                        <div class="row">
                            <div class="col-1-of-3">
                                <label for="admin-password">Error : </label>
                            </div>
                            <div class="col-2-of-3">
                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('admin-password') }}</strong>
                                    </span>
                                
                            </div>
                        </div>
                        @endif
                        <div class="row u-center-text">
                            <input type="login"  value="Login" style="cursor: pointer;" onclick="submitLoginForm()">
                        </div>
                        <div class="row u-center-text">
                            <a href="/login">Already member? Login</a>
                        </div>
                    </form>
                </div>
            </div>
       </div>
   </body>
   <script type="text/javascript">
       function submitLoginForm()
       {
        document.getElementById('loginForm').submit();
       }
   </script>
</html>