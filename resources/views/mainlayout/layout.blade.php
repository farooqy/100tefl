<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=9">
        <meta name="author" content="Neud Tesfay Desta">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>100TEFL</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="shortcut icon" href="https://100tefl.com/images/favicon.ico" sizes="32x32" type="image/png" >
    </head>
    
    <body>
        <header class="header" id="header">
<!--            <div class="sticky__back"></div>-->
            <nav class="row">
                <div class="col-1-of-4 header__logo-box">
                    <a href="{{env('APP_URL')}}"><img src="{{env('APP_URL')}}img/logo.png" alt="logo" class="header__logo-img"></a>
                </div>
                
                <ul class="col-3-of-4 header__main-nav">
                    <li><a href="">Home</a></li>
                    <li><a href="#section_news">News</a></li>
                    <li><a href="#section_services">Services</a></li>
                    <li><a href="#section_contact">Contact</a></li>
                    <li><a href="#section_career-partners">Career Partner</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </nav>
            
            <div class="header__title-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">你可以信赖的外教招聘管家</span>
                    <span class="heading-primary--sub">Your Dependable Career Partner</span>
                </h1>
                
                <a href="#popup" class="btn btn--watch-intro">Watch our intro<img src="img/play@2x.png" alt="watch intro video" class="intro-play-img"></a>
            </div>
            
            <div class="popup" id="popup">
                <div class="popup__video">
                    <a href="#header" class="popup__close">&times;</a>
                    <video src="vid/video_intro.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="img/video_poster_intro.jpg"></video>
                </div>
            </div>
        </header>
        
        <main>
            <!-- SERVICES NEWS -->
            <section class="section-news js-section--news" id="section_news">
                <div class="u-center-text u-margin-bottom-small">
                    <h2 class="heading-secondary">
                        最新消息 &#45; Latest News
                    </h2>
                </div>
                
                <div class="row video">
                    <div class="col-1-of-3">
                        <div class="video_small">
                            <div class="video_small--1">
                                <h4 class="video_small--title">生活在中国 &#45; Life In China</h4>
                                
                                <video src="vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="img/video_thumb_life-in-china.png"/>
                            </div>
                            <div class="video_small--2">
                                <h4 class="video_small--title">我们致力于实现更多目标 &#45; Our dedication to achieving more</h4>
                                
                                <video src="vid/video_life-in-china.mp4" controls="" type="video/mp4" width="100%" height="50%" poster="img/video_thumb_our-dedication.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-2-of-3">
                        <div class="video_big">
                            <div>
                                <h2 class="video_big--title">外国人在中国南京的看法<br>Views of foreigners in Nanjing China</h2>
                            </div>
                            <div class="video_big--video">
                                <video src="vid/video_foreigners_big.mp4" controls="" type="video/mp4" width="100%" height="100%" poster="img/video_poster_big.jpg"></video>
                            </div>
					    </div>
                    </div>
                </div>
                
                <div class="row u-center-text">
                    <a href="#" class="more_news">Read more latest news</a>
                </div>
            </section>
            
            <!-- SERVICES SECTION -->
            <section class="section-services" id="section_services">
                <div class="u-center-text u-margin-bottom-small">
                    <h2 class="heading-secondary">
                        服务 &#45; Services
                    </h2>
                </div>
                
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="services-box">
                            <i class="services-box__icon icon-basic-todo-txt"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">招聘<br>Recruitment</h3>
                            <a href="{{env('APP_URL')}}services" class="services-box__text">细节</a>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="services-box">
                            <i class="services-box__icon icon-basic-signs"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">训练<br>Training</h3>
                            <a href="{{env('APP_URL')}}services" class="services-box__text">细节</a>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="services-box">
                            <i class="services-box__icon icon-basic-link"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">咨询<br>Consulting</h3>
                            <a href="{{env('APP_URL')}}services" class="services-box__text">细节</a>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="services-box">
                            <i class="services-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">工作签证<br>Work-Visa</h3>
                            <a href="{{env('APP_URL')}}services" class="services-box__text">细节</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- SERVICES SECTION -->
            <section class="section-contact" id="section_contact">
                <div class="row">
                    <div class="col-1-of-2">
                        <div class="map-margin">
                            <iframe width="500" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=31.944612000000006~118.80564300000002&lvl=16&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no"></iframe>
                            
                            <div class="map-text">
                                <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=31.944612000000006~118.80564300000002&amp;sty=r&amp;lvl=16&amp;FORM=MBEDLD">View Larger Map</a>
                                
                                <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=31.944612000000006~118.80564300000002&amp;sty=r&amp;lvl=16&amp;rtp=~pos.31.944612000000006_118.80564300000002____&amp;FORM=MBEDLD">Get Directions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-2 contact_form">
                        <div class="row contact_form--box">
                            <div class="u-margin-bottom-small">
                                <h2 class="heading-secondary">
                                    服务 &#45; Contact us
                                </h2>
                            </div>
                            
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-1-of-2-small-margin">
                                        <label for="name">First Name</label>
                                    </div>
                                    <div class="col-1-of-2">
                                        <label for="name">Last Name</label>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-1-of-2-small-margin">
                                        <input type="text" name="name" id="name" placeholder="First Name" required>
                                    </div>
                                    <div class="col-1-of-2-long">
                                        <input type="text" name="name" id="name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1-of-3">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <input type="email" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                               <div class="row">
                                    <label>Message</label>
                                </div>
                                <div class="row">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <select name="find-us" id="find-us">
                                            <option value="concern" selected>What does your message concern</option>
                                            <option value="recruit">Recruit</option>
                                            <option value="job">Job</option>
                                            <option value="visa">Visa</option>
                                            <option value="training">Training</option>
                                            <option value="incubator">Incubator</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-1-of-2">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="col-1-of-2">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- CAREER PARTNERS SECTION -->
            <section class="section-career-partners" id="section_career-partners">
                <div class="u-center-text u-margin-bottom-small">
                    <h2 class="heading-secondary">
                        歪果仁 &#45; Career Partners
                    </h2>
                </div>
                
                <div class="row">
                    <div class="col-1-of-4">
                        <a href="{{env('APP_URL')}}careers">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--1">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--1">Job Placement</span>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-1-of-4">
                        <a href="{{env('APP_URL')}}careers">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--2">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--2">Job Training</span>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-1-of-4">
                        <a href="{{env('APP_URL')}}careers">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--3">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--3">Joining Incubator</span>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-1-of-4">
                        <a href="{{env('APP_URL')}}careers">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--4">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--4">Big Community</span>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- FOOTER -->
        <footer class="footer" id="footer">
            <div class="footer__logo-box">
                <a href=""><img src="img/logo.png" alt="Footer Logo" class="footer__logo"></a>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        <strong>100tefl</strong><br><br>
                        All rights reserved Copyright &copy; 2019 100tefl. All rights reserved
                    </p>
                </div>
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <p>Navigation</p>
                            
                            <li class="footer__item"><a href="{{env('APP_URL')}}" class="footer__link">Home</a></li>
                            <li class="footer__item"><a href="{{env('APP_URL')}}#section_news" class="footer__link">News</a></li>
                            <li class="footer__item"><a href="{{env('APP_URL')}}#section_services" class="footer__link">Services</a></li>
                            <li class="footer__item"><a href="{{env('APP_URL')}}#section_contact" class="footer__link">Contact</a></li>
                            <li class="footer__item"><a href="{{env('APP_URL')}}#section_career-partners" class="footer__link">Career Partners</a></li>
                            <li class="footer__item"><a href="{{env('APP_URL')}}about" class="footer__link">About</a></li>  
                        </ul>
                        <ul class="footer__list">
                            <p>Contact Us</p>
                            
                            <li class="footer__item"><a href="mailto:service@100tefl.com" class="footer__link">service@100tefl.com</a></li>
                            <li class="footer__item"><a href="" class="footer__link">+86 189 9405 0515</a></li>
                        </ul>
                        <ul class="footer__list">
                            <p>Add us</p>
                            
                            <li class="footer__item"><a href="#" class="footer__link"><img src="img/wechat_color.png" alt="wechat" class="follow-img"><span>ybws100tefl</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>