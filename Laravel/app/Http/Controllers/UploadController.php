<?php namespace App\Http\Controllers;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image gallery</title>

<script src="F:/Project/PHP/Laravel/fancybox/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="F:/Project/PHP/Laravel/fancybox/source/jquery.fancybox.pack.js"></script>

<link rel="stylesheet" href="F:/Project/PHP/Laravel/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />

<script type="text/javascript">

$(document).ready(function() {

	$("a.fancy").fancybox({
		openEffect : "none",
		closeEffect : "none",
		type: "image"
	});

});

</script>

		<style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background: #FFE0E0;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            form {
                background: #F5F5F5;
                padding: 20px;
                border-radius: 10px;
            }

     		h1 {
     			position: center;
     		}

     		.fancybox {
     			padding: 20px;
     			margin: 20px auto;
     		}


        </style>

</head>
<body>

<?php

use \Input as Input;

class UploadController extends Controller {
	
	public function upload() {
		
		if(Input::hasFile('file')){

			echo "<h1>Image Gallery</h1>";
			$file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
			$dir = "uploads/";

			if($opendir = opendir($dir))
			{
					while(($file = readdir($opendir)) !== FALSE)
					{
						
						if($file != "." && $file != "..") {

							echo "<br>" . $file . "<br>";
							//echo "<img src='$dir/$file' width='150' height='150'><br />";
							echo "<a class='fancybox' rel='gallery' href='$dir/$file'><img src='$dir/$file' width='100' height='100' alt=''/></a>";
						}	
						
					}
					closedir($opendir);
			}
		
			 
		}
		else {
			echo "please select an image to upload";
		}
		
	}

}



?>

<!--<a class="fancy" href="uploads/test.png">test</a>-->


</body>
</html>