<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Favicon Dev</title>

	<link rel="shortcut icon" href="/favicon.ico?v=<?php echo filemtime('favicon.ico') ?>" />



	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>
		
</head>
<body style="padding: 80px 30px 150px;">
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
Mobile Chrome is still to be tested (both iOS and Android) <br> <br>
<hr>
<br> <br>


Echo filetime for favicon caching :: <br>	
&lt;link rel=&quot;shortcut icon&quot; href=&quot;favicon.ico?v=&lt;?php echo filemtime('favicon.ico') ?&gt;&quot; /&gt; <br>	

Echo MD5-hash for favicon caching :: <br>	
&lt;link rel=&quot;shortcut icon&quot; href=&quot;favicon.ico?v=&lt;?php echo md5_file('favicon.ico') ?&gt;&quot; /&gt; <br>	





</body>
</html>