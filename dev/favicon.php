<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Favicon Dev | Studio N Testing</title>
	<meta name="description" content="Development testing to figure out favicon settings across all browsers &amp; devices.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="http://new-project.static" />
	<link rel="author" href="/humans.txt">

	<!-- <link rel="icon" href="/touch-icon-192x192.png" sizes="192x192"> -->
	<!-- <link rel="icon" href="/apple-touch-icon-180x180-precomposed.png" sizes="180x180"> -->
	<link rel="icon" href="/apple-touch-icon-180x180-precomposed.png">

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Favicon Dev | Studio N Testing" />
	<meta property="og:description" content="Development testing to figure out favicon settings across all browsers &amp; devices." />
	<meta property="og:url" content="http://studiontesting.com/dev/favicon" />
	<meta property="og:site_name" content="Studio N Testing" />
	<meta property="og:image" content="http://studiontesting.com/img" />

	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php autoVer('/css/ie.css'); ?>"/>
		<script src="<?php autoVer('/js/ie-min.js'); ?>"></script>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>

SAFARI 9<br>
Seems like for safari desktop v9, just need 'apple-touch-icon.png' and DO NOT need to link it in head. This is what is displayed in the 'favorites' pane, NOT the url bar. <br>
If you WERE to link it in the head, it would show any image you specify - it does not need to be named 'apple-touch-icon-XXXXX' or any variation of it, be it with 'precomposed', without 'precomposed' or with or without 180x180, etc... <br>
This is the code to put in HEAD if you WERE to link it :: <br>
&lt;link rel="apple-touch-icon" href="/apple-touch-icon.png"&gt; <br>
Note how you have to title it with rel="apple-touch-icon" <br>
The url bar in RETINA shows the proper favicon.ico, the 32X size. <br>
the url bar in STANDARD shows the proper favicon.ico, the 16X size <br>
Need to figure out how to test older Safari versions <br> <br>
<hr>
<br> <br>
CHROME <br>
In Chrome the icon is shown on the left hand side of the page's tab <br>
If NOTHING is specified in the head, then it uses the standard favicon.ico <br>
On RETINA it shows 32X size <br>
On STANDARD it shows 16X size <br>
If something IS specified in the head, such as &lt;link rel="icon" href="/touch-icon-192x192.png" sizes="192x192"&gt;, it will show touch-icon-192x192.png <br>
This is the case on any desktop/laptop screen, be it retina or not <br>
Now note this :: <br>
If an icon such as 'apple-touch-icon-180x180-precomposed.png' is implicity specified in the head, THAT will be shown. Notice how this icon is titled with 'apple-touch-icon'... This makes me think that for Chrome, the name of the icon is irrelevant. Below is the example link for the head:: <br>
&lt;link rel="icon" href="/apple-touch-icon-180x180-precomposed.png" sizes="180x180"&gt; <br>
What will happen if we remove 'sizes' attribute? <br>
Such as :: <br>
&lt;link rel="icon" href="/apple-touch-icon-180x180-precomposed.png"&gt; <br>
The same icon is still displayed like normal -- on the left hand side of the page's tab <br>
All of these ideas at the moment ONLY APPLY to desktop versions of Chrome, NOT mobile. <br>
Mobile Chrome is still to be tested (both iOS and Android)

</body>
</html>