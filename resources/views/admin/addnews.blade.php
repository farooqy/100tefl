<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=9">
        <meta name="author" content="Neud Tesfay Desta">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Post | 100TEFL</title>
        
        <link href="/css/fonts_google.css?family=Lato:300,400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="../css/icon-font.css" type="text/css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="shortcut icon" href="http://100tefl.com/images/favicon.ico" sizes="32x32" type="image/png">
        
        <link rel="stylesheet" href="/css/jodit.min.css">
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/jodit.min.js"></script>
        <script src="/js/main.js"></script>
        
    </head>
    
    <body>
        <header class="pages_header">
            <nav class="row sticky__services">
                <div class="col-1-of-4 header__logo-box">
                    <a href="/"><img src="../img/logo.png" alt="logo" class="header__logo-img"></a>
                </div>
                
                <label for="toggle" class="label-black">&#9776;</label>
                <input type="checkbox" id="toggle">
                
                <div class="col-3-of-4-drop-down menu">
                    <ul class="pages_header__black-nav">
                        <li><a href="/" onClick="toggleDropdown()">Home</a></li>
                        <li><a href="/#section_news" onClick="toggleDropdown()">News</a></li>
                        <li><a href="/services" onClick="toggleDropdown()">Services</a></li>
                        <li><a href="/#section_contact" onClick="toggleDropdown()">Contact</a></li>
                        <li><a href="/#section_career-partners" onClick="toggleDropdown()">100tefl VIP</a></li>
                        <li><a href="/about" onClick="toggleDropdown()">About</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
        	@if(session('success'))
        	<div class="row">
        		<strong style="color: green">News sucessfully added</strong>
        	</div>
        	@endif
            <div class="row u-margin-top-huge u-margin-bottom-big">
                <form method="post" action="{{route('newNews')}}" id="newNews" enctype="multipart/form-data">
                	@csrf
                    @if(session('uploadFailed'))
                    <div class="row">
                        <strong style="color: red">{{session('uploadFailed')}}</strong>
                    </div>
                    @endif
                	@if($errors->any())
                	@foreach($errors->all() as $error)
                	<div class="row">
                		<strong style="color: red">{{$error}}</strong>
                	</div>
                	@endforeach
                	@endif
                    <div class="row">
                        <label for="newsTitle">Add the title</label>
                    </div>
                    <div class="row u-margin-top-tiny">
                        <input type="text" name="newsTitle" id="newsTitle" placeholder="Enter news Title" required value="{{old('newsTitle')}}">
                    </div>
                    <div class="row u-margin-top-tiny">
                            <label for="newsFeatureImage">News feature Image/Video</label>
                    </div>
                    <div class="row u-margin-top-small u-margin-bottom-small">
                        <input type="file" id="browse newsFeatureImage" name="newsFeatureImage"/>
                    </div>

                    <div class="row u-margin-top-tiny" style="border: thin solid gray;">
                            <label for="newsContent" class="col-md-4 col-lg-4 GenVideoCode" style="background-color: #0fed9b;padding: 10px; cursor: pointer;">Generate Video Code</label>
                            <span class="col-md-8 col-lg-8" style="padding: 10px" id="videoCode"><span class="hint">Copy code from here</span></span>
                    </div>
                    <div class="row u-margin-top-tiny">
                        <label for="givenContent">Write the content</label>
                    </div>
                    <div class="row u-margin-top-tiny">
                        <input type="givenContent" name="newsContent" id="givenContent" placeholder="Write News Content" required value="{{old('givenContent')}}">
                    </div>
                    <div class="row u-margin-top-tiny">
                    </div>
                    {{-- <div class="row u-margin-top-tiny">
                        <input type="file" id="newsFiles" name="newsFiles[]" multiple="" />
                    </div> --}}
                    <div class="row u-margin-top-tiny">
                        <input type="news_write" value="Write News" style="cursor: pointer;" class="newNews">
                    </div>
                </form>
                
                <script>
                    var editor = new Jodit('#givenContent');
                </script>
            </div>
            <div class="row">
            	<form action="{{route('addFile')}}" method="POST" id="addFileForm" name="addFileForm" enctype="multipart/form-data" style="display: none;">
            		@csrf
            		<input type="file" class="hide addFile" name="addFile" >
            		<input type="submit" class="hide submitAddFile" name="submitAddFile">
				</form>
            </div>
        </main>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
    </body>
</html>