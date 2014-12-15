<?php
	if ($_POST['submit']=='submit') { 
		$data = stripslashes($_POST['newdata']);
		$file = $_POST['clip'].".html";
		file_put_contents($file, $data);
	}
?>

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SethCMS</title>

<link rel="stylesheet" type="text/css" href="sethcms.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector: ".editer",
		toolbar: "insertfile undo redo | styleselect | italic | link image"
	});
</script>

<style>
	body {
		color:#666;
		font-family:verdana, arial, sans-serif;
		font-size:14px;
		margin:0;
		padding:0;
	}
	h1 { margin:0; }
	.container { width:100%; height:100%; }
	.block { margin:0 auto; width:80%; max-width:400px; border:1px solid #888; min-height:20px;}
	
</style>
</head>

<body>
	<div class='container'>
       
        <div class="block editable" id='copy'></div>
        <div class="block editable" id='copy2'></div>

	</div> <!-- .container -->
    
<script src="sethcms.js"></script>

</body>
</html>
