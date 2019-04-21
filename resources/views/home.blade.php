<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=9">
        <meta name="author" content="Neud Tesfay Desta">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Admin | 100TEFL</title>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="/js/umd/popper.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <link href="/css/fonts_google.css?family=Lato:300,400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/icon-font.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css" type="text/css">
        <link rel="shortcut icon" href="https://100tefl.com/images/favicon.ico" sizes="32x32" type="image/png" >
    </head>
    
    <body>
        <header class="pages_header">
            <nav class="row sticky__services">
                <div class="col-1-of-4 header__logo-box">
                    <a href="../index.html"><img src="../img/logo.png" alt="logo" class="header__logo-img"></a>
                </div>
                
                <label for="toggle" class="label-black">&#9776;</label>
                <input type="checkbox" id="toggle">
                
                <div class="col-3-of-4-drop-down menu">
                    <ul class="pages_header__black-nav">
                        <li><a href="../index.html" onClick="toggleDropdown()">Home</a></li>
                        <li><a href="../index.html#section_news" onClick="toggleDropdown()">News</a></li>
                        <li><a href="../pages/services.html" onClick="toggleDropdown()">Services</a></li>
                        <li><a href="../index.html#section_contact" onClick="toggleDropdown()">Contact</a></li>
                        <li class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                            <a class="dropdown-item" href="/logout" id="Logout">Log out</a>
                          </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <div class="row">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
            </div>
            <div class="row u-margin-top-big">
                <div class="col-1-of-3 admin-box--card">
                    <div class="admin-box">
                        <a href="/home/addpost"><i class="admin-box__icon icon-basic-pin2"></i></a>
                        <h3 class="heading-tertiary u-margin-bottom-small">Post</h3>
                        <a class="btn--services services-box__text" href="pages/services.html">细节</a>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="admin-box">
                        <a href=""><i class="admin-box__icon icon-basic-share"></i></a>
                        <h3 class="heading-tertiary u-margin-bottom-small">Add User</h3>
                        <a class="btn--services services-box__text" href="pages/services.html">细节</a>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="admin-box">
                        <a href=""><i class="admin-box__icon icon-basic-info"></i></a>
                        <h3 class="heading-tertiary u-margin-bottom-small">View Feedback</h3>
                        <a class="btn--services services-box__text" href="pages/services.html">细节</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <form class="lgout" id="logOutForm" method="post" action="{{route('logout')}}">@csrf</form>
            </div>
        </main>
        <script type="text/javascript">
            $('#Logout').click(function(e){
                e.preventDefault();
                $('#logOutForm').submit();
            });
        </script>
    </body>
</html>