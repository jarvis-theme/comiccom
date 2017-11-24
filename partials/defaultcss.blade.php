    {{favicon()}}   
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    {{generate_theme_css('comiccom/assets/css/reset.css')}}
    {{generate_theme_css('comiccom/assets/css/bootstrap-custom.css')}}
    
    @if($tema->isiCss=='')  
    {{generate_theme_css('comiccom/assets/css/style.css?v=002')}}
    @else   
    {{generate_theme_css('comiccom/assets/css/editstyle.css?v=002')}}
    @endif  
    
    <noscript>
        {{generate_theme_css('comiccom/assets/css/nojs.css')}}
    </noscript>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
