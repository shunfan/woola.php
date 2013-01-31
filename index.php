<?php require("config.php"); session_start(); $short_url = $_SESSION['short_url']; if(!$short_url){ $display = ' style="display: none;"'; } ?>
<!doctype html>
<head>
	<meta charset="utf-8">
	
	<title>Woola</title>
	
	<meta name="description" content="Woola is an elegant way to shorten your urls freely and quickly. It can enable your urls to be laconic and you could also share the short urls with your friends easily.">
	
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
	<!-- Style Sheet -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">

	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row-fluid woola">
		<div class="span12">
			<a href="/"><div id="woola"></div></a>
			<div class="core">
				<div class="alert alert-success fade in"<?php echo $display; ?>>
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Well done!</strong> Its short url is <a href="http://woo.la/<?php echo $short_url; ?>">http://woo.la/<?php echo $short_url; ?></a>
					<button class="btn btn-mini" id="copy-button" data-clipboard-text="http://woo.la/<?php echo $short_url; ?>">Preparing</button>
				</div>
				<form method="post" action="/shorten.php" onsubmit="return validate()">
					<div class="controls">
						<input class="span8" type="text" name="original_url" id="original_url" placeholder="Original URL" rel="tooltip" data-trigger="click" data-placement="top" title="REAL URL ONLY">
					</div>
					<button class="btn btn-success" type="submit">Shorten</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="assets/js/ZeroClipboard.min.js"></script>
<script>var clip=new ZeroClipboard(document.getElementById("copy-button"),{moviePath:"/assets/js/ZeroClipboard.swf"});clip.on("load",function(a){document.getElementById("copy-button").innerHTML="Copy"});clip.on("complete",function(a,b){document.getElementById("copy-button").innerHTML="Copied"});function validate(){var a=document.getElementById("original_url").value;var b=document.getElementById("original_url").value.lastIndexOf(".");submitOK="true";if(a.length<4){$("#original_url").tooltip("show");submitOK="false"}else{if(b<1){$("#original_url").tooltip("show");submitOK="false"}}if(submitOK=="false"){return false}};</script>
</body>
</html>
<?php session_destroy(); ?>