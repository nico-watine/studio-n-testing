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

SAFARI 9<br>
Seems like for safari desktop v9, just need 'apple-touch-icon.png' and DO NOT need to link it in head. This is what is displayed in the 'favorites' pane, NOT the url bar. <br>
NOTE : the above comment is when the page is BOOKMARKED, after which is appears in the 'favorites' page <br>
If you WERE to link it in the head, it would show any image you specify - it does not need to be named 'apple-touch-icon-XXXXX' or any variation of it, be it with 'precomposed', without 'precomposed' or with or without 180x180, etc... <br>
This is the code to put in HEAD if you WERE to link it :: <br>
&lt;link rel="apple-touch-icon" href="/apple-touch-icon.png"&gt; <br>
Note how you have to title it with rel="apple-touch-icon" <br>
The url bar in RETINA shows the proper favicon.ico, the 32X size. <br>
the url bar in STANDARD shows the proper favicon.ico, the 16X size <br>
Need to figure out how to test older Safari versions <br> <br>
<hr>
<br> <br>
FIREFOX <br>
In Firefox, the icon is shown on the left hand size of the page's tab (just like chrome) <br>
If NOTHING is linked in the head, it will show favicon.ico <br>
On RETINA, it will display 64X size of favicon.ico <br>
NOTE how this is larger than Chrome and Safari, which both display the 32X size of favicon.ico <br>
Again, this is just RETINA <br>
On STANDARD, it displays favicon.ico 16X size - the same as Chrome and Safari <br>
If something IS linked in the head, such as : <br>
&lt;link rel="icon" href="/touch-icon-192x192.png" sizes="192x192"&gt; <br>
It will show the 'touch-icon-192x192.png' on BOTH RETINA and STANDARD screens <br>
What happens if 'sizes="192x192"' is removed? (Just like we did on Firefox...) <br>
If this is linked : &lt;link rel="icon" href="/touch-icon-192x192.png"&gt; <br>
Then 'touch-icon-192x192.png' is still shown (this is the same trait as Chrome) <br>
And now if we use an icon the begins with 'apple-touch-icon-XXX' (will test with both numeric size and without) <br>
Example for head : <br>
&lt;link rel="icon" href="/apple-touch-icon-180x180-precomposed.png" sizes="180x180"&gt; <br>
Then 'apple-touch-icon-180x180-precomposed.png' is displayed as page icon (in page tab) <br>
And now without 'sizes="180x180"'? <br>
&lt;link rel="icon" href="/apple-touch-icon-180x180-precomposed.png"&gt; <br>
Same result as with 'sizes="180x180"', displays 'apple-touch-icon-180x180-precomposed.png'<br>
<br>
<br>
<br>
<hr>
MOBILE SAFARI iOS 9.2 <br>

Echo filetime for favicon caching :: <br>	
&lt;link rel=&quot;shortcut icon&quot; href=&quot;favicon.ico?v=&lt;?php echo filemtime('favicon.ico') ?&gt;&quot; /&gt; <br>	

Echo MD5-hash for favicon caching :: <br>	
&lt;link rel=&quot;shortcut icon&quot; href=&quot;favicon.ico?v=&lt;?php echo md5_file('favicon.ico') ?&gt;&quot; /&gt; <br>	





</body>
</html>