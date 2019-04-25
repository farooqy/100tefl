<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=9">
        <meta name="author" content="Neud Tesfay Desta">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>News | 100TEFL</title>
        
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/main.js"></script>
        <link href="/css/fonts_google.css?family=Lato:300,400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="../css/icon-font.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="shortcut icon" href="https://100tefl.com/images/favicon.ico" sizes="32x32" type="image/png" >
    </head>
    
    <body>
        <header class="pages_header">
            <nav class="row sticky__services">
                <div class="col-1-of-4 header__logo-box">
                    <a href="/"><img src="/img/logo.png" alt="logo" class="header__logo-img"></a>
                </div>
                
                <label for="toggle" class="label-black">&#9776;</label>
                <input type="checkbox" id="toggle">
                
                <div class="col-3-of-4-drop-down menu">
                    <ul class="pages_header__black-nav">
                        <li><a href="/" onClick="toggleDropdown()">Home</a></li>
                        <li><a href="/news" onClick="toggleDropdown()" style="border-bottom: .1rem solid #000;" onClick="toggleDropdown()">News</a></li>
                        <li><a href="/services" onClick="toggleDropdown()">Services</a></li>
                        <li><a href="/#section_contact" onClick="toggleDropdown()">Contact</a></li>
                        <li><a href="/careers">100tefl VIP</a></li>
                        <li><a href="/about" onClick="toggleDropdown()">About</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <section class="section-news">
                <div class="row">
                    <div class="col-1-of-3 res-full">
                        @if(isset($newsList) && $newsList->count() > 0)
                        @foreach($newsList as $news)

                        <div class="video_small">
                            <div class="video_small--1">
                                <a href="/news/{{$news->id}}">
                                    <h4 class="video_small--title">{{$news->title}}</h4>
                                    @if($news->feature_image_type === "video")
                                    <video src="{{$news->feature_image}}#t=0.5" controls="" type="video/mp4" width="100%" height="100%" preload="metadata"/>
                                    @else
                                    <img src="{{$news->feature_image}}" width="100%" height="230px">
                                    @endif
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @else

                        <div class="video_small">
                            <div class="video_small--1"> 
                                <h4 class="video_small--title">生活在中国 &#45; Life In China</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="../img/video_thumb_life-in-china.png"/>
                            </div>
                            <div class="video_small--2">
                                <h4 class="video_small--title">我们致力于实现更多目标 &#45; Our dedication to achieving more</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="50%" poster="../img/video_thumb_our-dedication.png"/>
                            </div>
                            <div class="video_small--1"> 
                                <h4 class="video_small--title">生活在中国 &#45; Life In China</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="../img/video_thumb_life-in-china.png"/>
                            </div>
                            <div class="video_small--2">
                                <h4 class="video_small--title">我们致力于实现更多目标 &#45; Our dedication to achieving more</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="50%" poster="../img/video_thumb_our-dedication.png"/>
                            </div>
                            <div class="video_small--1"> 
                                <h4 class="video_small--title">生活在中国 &#45; Life In China</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="../img/video_thumb_life-in-china.png"/>
                            </div>
                            <div class="video_small--2">
                                <h4 class="video_small--title">我们致力于实现更多目标 &#45; Our dedication to achieving more</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="50%" poster="../img/video_thumb_our-dedication.png"/>
                            </div>
                            <div class="video_small--1"> 
                                <h4 class="video_small--title">生活在中国 &#45; Life In China</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="../img/video_thumb_life-in-china.png"/>
                            </div>
                            <div class="video_small--2">
                                <h4 class="video_small--title">我们致力于实现更多目标 &#45; Our dedication to achieving more</h4>
                                
                                <video src="../vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="50%" poster="../img/video_thumb_our-dedication.png"/>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-2-of-3 res-full">
                        <div class="video_big">
                            @if(isset($notfound))
                            <div>
                                <h2>Sorry, The news you are looking for doesn't exist</h2>
                            </div>
                            @elseif(isset($givenNews))

                            <div>
                                <h2 class="video_big--title">{{$givenNews[0]->title}}</h2>
                            </div>
                            <div class="video_big--video">
                                @if($givenNews[0]->feature_image_type === "video")
                                <video src="{{$givenNews[0]->feature_image}}#t=0.5" controls="" type="video/mp4" width="100%" height="100%" poster="/img/video_poster_big.jpg"></video>
                                @else
                                <img src="{{$givenNews[0]->feature_image}}" width="100%" height="100%">
                                @endif
                            </div>
                            <div class="video_latest-news__description givenContent">
                                {{$newsList[0]->content}}
                            </div>
                            @elseif(isset($newsList) && $newsList->count() > 0)
                            <div>
                                <h2 class="video_big--title">{{$newsList[0]->title}}</h2>
                            </div>
                            <div class="video_big--video">
                                @if($newsList[0]->feature_image_type === "video")
                                <video src="{{$newsList[0]->feature_image}}#t=0.5" controls="" type="video/mp4" width="100%" height="100%" poster="/img/video_poster_big.jpg"></video>
                                @else
                                <img src="{{$newsList[0]->feature_image}}" width="100%" height="100%">
                                @endif
                            </div>
                            <div class="video_latest-news__description givenContent">
                                {{$newsList[0]->content}}
                            </div>

                            @else
                            <div>
                                <h2 class="video_big--title">外国人在中国南京的看法<br>Views of foreigners in Nanjing China</h2>
                            </div>
                            <div class="video_big--video">
                                <video src="../vid/video_foreigners_big.mp4#t=0.5" controls="" type="video/mp4" width="100%" height="100%" preload="metadata"></video>
                            </div>
                            <div class="video_latest-news__description">
                                <h3>HELLO</h3>
                                <p>THIS IS THE LATEST NEWS DESCRIPTION</p>
                            </div>
                            @endif
					    </div>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- FOOTER -->
        <footer class="footer" id="news_footer">
            <div class="footer__logo-box">
                <a href="../index.html"><img src="../img/logo.png" alt="Footer Logo" class="footer__logo"></a>
            </div>
            <div class="row">
                <div class="col-1-of-2 footer-left">
                    <p class="footer__copyright">
                        <strong>100tefl</strong><br><br>
                        All rights reserved Copyright &copy; 2019 100tefl. All rights reserved
                    </p>
                </div>
                <div class="col-1-of-2 footer-right">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <p>Navigation</p>
                            
                            <li class="footer__item"><a href="/" class="footer__link">Home</a></li>
                            <li class="footer__item"><a href="/#section_news" class="footer__link">News</a></li>
                            <li class="footer__item"><a href="/services" class="footer__link">Services</a></li>
                            <li class="footer__item"><a href="/#section_contact" class="footer__link">Contact</a></li>
                            <li class="footer__item"><a href="/about" class="footer__link">About</a></li>
                            <li class="footer__item"><a href="/login" class="footer__link">Login</a></li>
                            
                        </ul>
                        <ul class="footer__list">
                            <p>Contact Us</p>
                            
                            <li class="footer__item"><a href="mailto:service@100tefl.com" class="footer__link">service@100tefl.com</a></li>
                            <li class="footer__item"><a href="#100tefl-vip_footer" class="footer__link">+86 189 9405 0515</a></li>
                        </ul>
                        <ul class="footer__list">
                            <p>Add us</p>
                            
                            <li class="footer__item"><a href="#100tefl-vip_footer" class="footer__link"><img src="../img/wechat_color.png" alt="wechat" class="follow-img"><span>ybws100tefl</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>