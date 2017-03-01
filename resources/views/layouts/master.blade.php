<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>	
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <title>{{ $website }} - {{ $title }}</title>
	    <link rel="stylesheet" type="text/css" href="{{ $css }}" media="all"/>
	    <script type="text/javascript" src="{{ $jquery }}"></script>
	    <script type="text/javascript" src="{{ $js }}"></script>
    </head>

    <header id="header">
	    <div class="header_block">
		    <nav>
			    <ul>
				    <li><img id="header_logo" src="{{ $img['logo']['src'] }}"/></li>
				    <li><a href="{{ $a['home']['url']}}">{{ $a['home']['text'] }}</a></li>
				    <li><a href="{{ $a['projects']['url']}}">{{ $a['projects']['text'] }}</a></li>
				    <li><a href="{{ $a['team']['url']}}">{{ $a['team']['text'] }}</a></li>
				    
				    <li><a href="{{ $a['project']['url']}}">{{ $a['project']['text'] }}</a></li>
				    <li><a href="{{ $a['profil']['url']}}">{{ $a['profil']['text'] }}</a></li>
				    
				    
				    <li><a href="{{ $a['login']['url']}}">{{ $a['login']['text'] }}</a></li>
				    <li><a href="{{ $a['logout']['url']}}">{{ $a['logout']['text'] }}</a></li>
				    <li><a href="{{ $a['inscription']['url']}}">{{ $a['inscription']['text'] }}</a></li>
				    <li><a href="{{ $a['manage-members']['url']}}">{{ $a['manage-members']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-profil']['url']}}">{{ $a['edit-profil']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-texts']['url']}}">{{ $a['edit-texts']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-figures']['url']}}">{{ $a['edit-figures']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-projects']['url']}}">{{ $a['edit-projects']['text'] }}</a></li>
				    
				    
			    </ul>
		    </nav>
	    </div>
	    <div class="share_boxes">
		    <a class="box" id="twitter" href="#"><img src="{{ $img['twitter']['src']}}"/></a>
		    <a class="box" id="facebook" href="#"><img src="{{ $img['facebook']['src']}}"/></a>
		    <a class="box" id="google" href="#"><img src="{{ $img['google']['src']}}"/></a>
	    </div>
    </header>
    
    
    <body>
    
        @yield('content')
        
        <footer id="footer">
	        <div id="footer_container">
	                <a href="{{ $a['login']['url']}}" id="footer_input">{{ $a['login']['text'] }}</a>
		        <h5>{{ $copyright }}</h5>
	        </div>
        </footer>
    </body>
</html>

