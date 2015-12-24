<?php

// ---------------------------------------------------------------------------
//
// PIVOT - LICENSE:
//
// This file is part of Pivot. Pivot and all its parts are licensed under 
// the GPL version 2. see: http://www.pivotlog.net/help/help_about_gpl.php
// for more information.
//
// ---------------------------------------------------------------------------


// for some reason FF doesn't load the cropper properly in a popup. We need to redirect once, to fix this.
if (!isset($_GET['redir'])) {
	echo "<script>self.location='module_image.php?image=".$_GET['image']."&redir=1';</script>";
	die();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en-us" />
	<title>Pivot Image Cropper</title>
	<link rel="stylesheet" type="text/css" href="../theme/default_theme.css" />
	<script src="../includes/js/cropper/prototype.js" type="text/javascript"></script>	
 	<script src="../includes/js/cropper/scriptaculous.js?load=builder,dragdrop" type="text/javascript"></script>
	<script src="../includes/js/cropper/cropper.js" type="text/javascript"></script>
	
	
	<script type="text/javascript" charset="utf-8">
			
		// setup the callback function
		function onEndCrop( coords, dimensions ) {
			$('crop_x').value = coords.x1 * $('factor').value;
			$('crop_y').value = coords.y1 * $('factor').value;
			$('crop_w').value = (coords.x2 - coords.x1 ) * $('factor').value;
			$('crop_h').value = (coords.y2 - coords.y1 ) * $('factor').value;
			
			if 	($('type').value=='fixed') {
				$('resultWidth').innerHTML = setW;
				$('resultHeight').innerHTML = setH;
			} else if 	($('type').value=='free') {
					$('resultWidth').innerHTML = Math.round((coords.x2 - coords.x1) * $('factor').value);
					$('resultHeight').innerHTML = Math.round((coords.y2 - coords.y1) * $('factor').value);
			} else {
				
				var width = coords.x2 - coords.x1;
				var height = coords.y2 - coords.y1;	
				var max = Math.max(setW,setH);
				
				if (width>height) {
					var height = Math.round( height / width * max );
					var width = max;
				} else {
					var width = Math.round( width / height * max );
					var height = max;
				}
				
				$('resultWidth').innerHTML = width;
				$('resultHeight').innerHTML = height;
				
			}


		}
		
		// Initialize cropper.
		Event.observe( window, 'load', function() { 
			cropFixed();
		} ); 		


		/**
		 * Make a fixed size thumbnail, as set in configuration.
		 */
		function cropFixed() { 

			if (typeof(cropper) == "object") { cropper.remove(); }
			
			cropper = new Cropper.Img( 'testImage', {
					ratioDim: { x: maxWidth, y: maxHeight },
					displayOnInit: true,
					onEndCrop: onEndCrop,
					onloadCoords: { x1: defX+5, y1: defY+5, x2: (defX+maxWidth-5), y2: (defY+maxHeight-5)  }
				}); 
			$('type').value = 'fixed';
			$('resultWidth').innerHTML = setW;
			$('resultHeight').innerHTML = setH;
			
		}		
		
		/**
		 * Make a thumbnail with free proportions, but it's bound by the size set in configuration
		 */
		function cropBounded() {
			
			if (typeof(cropper) == "object") { cropper.remove(); }
			
			cropper = new Cropper.Img( 'testImage', {
					minWidth: minWidth,
					minHeight: minHeight,
					displayOnInit: true,
					onEndCrop: onEndCrop,
					onloadCoords: { x1: 10, y1: 10, x2: 10+minWidth, y2: 10+minHeight }
				});
			$( 'type' ).value = 'bounded';	
		}
		
		/**
		 * Make a thumbnail by cropping whatever the user selected.
		 */
		function cropFree() {

			if (typeof(cropper) == "object") { cropper.remove(); }
			
			cropper = new Cropper.Img( 'testImage', {
					minWidth: minWidth,
					minHeight: minHeight,
					displayOnInit: true,
					onEndCrop: onEndCrop,
					onloadCoords: { x1: 10, y1: 10, x2: 10+minWidth, y2: 10+minHeight }
				});
			$( 'type' ).value = 'free';
		}

		
	</script>
</head>
<body  style="margin: 12px 12px 12px 12px; background-image: none;">

<?php
// pv_core must be included
if (file_exists("pv_core.php")) {
	include_once('pv_core.php');
	include_once('modules/module_imagefunctions.php');
} else {
	include_once('../pv_core.php');
	include_once('../modules/module_imagefunctions.php');
}

global $Pivot_Vars;

CheckLogin();

chdir($Paths['upload_path']);

// -- main --

if(!$img) {
	$img =  $Pivot_Vars['image'];
}

// get original image attributes
$attr = get_image_attributes( $img );	
$img = new Attributes($attr['name'],$attr['w'],$attr['h'],$attr['x'],$attr['y']);


if(isset($Pivot_Vars['crop'])) {
	// create the thumbnail!
	create_thumbnail();		
} else {
	// show the JS crop editor!
	print_crop_editor();									
}


// -- main --


// Nothing to change from here
// -------------------------------
function get_image_attributes($img) {

	
	if(!file_exists($img)) { 
		$img=stripslashes(urldecode($img)); 
	}

	if(!file_exists($img)) {
		echo "<br />$img can not be opened. <br />";
		echo "Current Path: ".getcwd()."<br />";
		die();
	}
	
	$nfo = getImageSize($img);

	return Array('name'=>$img,'w'=>$nfo[0],'h'=>$nfo[1],'x'=>0,'y'=>0,'extra'=>$nfo);
}



function create_thumbnail() {
	global $img, $Pivot_Vars;
		
	
	$thumb = new Image($Pivot_Vars['crop'],$Pivot_Vars['crop_w'],$Pivot_Vars['crop_h'],$Pivot_Vars['crop_x'],$Pivot_Vars['crop_y'], $Pivot_Vars['type']);

	$ext = strtolower($img->ext);

	if( ($ext == 'gif') || ($ext == 'jpg') || ($ext == 'jpeg') || ($ext == 'png') ) {
		gd_crop($thumb);
	} else {
		echo "This file extension is not supported, please try JPG, GIF or PNG";
		print_module_footer();
	}
}



class Image {
	var $name, $w, $h, $x, $y, $type;

	function Image($n,$w,$h,$x,$y,$type) 
	{
		$this->name	= $n;
		$this->w	= $w;
		$this->h	= $h;
		$this->x	= $x;
		$this->y	= $y;
		$this->type	= $type;
	}	
}



class Attributes extends Image {
	
	var $ext, $new_name;

	function Attributes($n,$w,$h,$x,$y) 
	{
		$this->Image($n,$w,$h,$x,$y);
		
		if(preg_match("/([a-zA-Z]+)$/i",$n,$m)) {
			$this->ext = $m[0];
			$this->new_name = preg_replace("/(\.)(.*)$/i",".thumb.".$m[0],$n);
		} else {
			echo "Error on creating thumbnail $n";
			die();
		}
	}
}



function print_crop_editor() {
	global $host, $img, $Cfg, $mw, $mh, $Paths;

	
	$factor = max( ($img->w / 600) , ($img->h / 500) );

	$w = round($img->w/$factor);
	$h = round($img->h/$factor);
	
	if (($mw/$img->w) > ($mh/$img->h)) {
		// thumb stretches full width
		$def_x = 0;
		$def_w = round($img->w/$factor - 2);

		$thumbfactor = ($mw / $def_w);

		$def_y = round(( $img->h / $factor / 2 ) - ( $mh / $thumbfactor / 2 ));
		$def_h = round($mh / $thumbfactor);
		// thumb's y and height are centered horizontally on the middle of the image..

	} else {
		// thumb stretches full height
		$def_y = 0;
		$def_h = round($img->h/$factor - 2);

		$thumbfactor = ($mh / $def_h);

		$def_x = round(( $img->w / $factor / 2 ) - ( $mw / $thumbfactor / 2 ));
		$def_w = round($mw / $thumbfactor);
		// thumb's y and height are centered horizontally on the middle of the image..

	}
		
	$filename = $Paths['upload_url'] . $img->name;


?>

	<script type="text/javascript" charset="utf-8">
		
	var minWidth = 100;
	var maxWidth = <?php echo $def_w ?>;
	var minHeight = 100;
	var maxHeight = <?php echo $def_h ?>;
	var defX = <?php echo $def_x ?>;
	var defY = <?php echo $def_y ?>;
	var setW = <?php echo $mw ?>;
	var setH = <?php echo $mh ?>;
	
	</script>

	
	<h1 style="padding: 6px; margin: 0 0 10px;  border-bottom: 1px solid #AAA;">Pivot thumbnail creator: <b>'<?php echo $img->name; ?>'</b></h1>
	
	<div id="testWrap" style="float:left;">
		<img src="<?php echo $filename; ?>" alt="test image" id="testImage" width="<?php echo $w; ?>" height="<?php echo $h; ?>" />
	</div>
	
	<div style="float:left; padding-left: 10px;">

		
	<p> <strong>Crop type:</strong></p>
	<p>	
		<input type="radio" onclick="cropFixed();" name="cropType" id="cropFixed" value="1" checked="checked" />
		<label for="cropFixed">Fixed Proportions</label><br />
		<input type="radio" onclick="cropBounded();" name="cropType" id="cropBounded" value="2" />
		<label for="cropBounded">Bounded Size</label><br />
		<input type="radio" onclick="cropFree();" name="cropType" id="cropFree" value="3" />
		<label for="cropFree">Free Crop</label><br />
	</p>	
	
	
<p>Target thumbnail will be: <span id='resultWidth'><?php echo $mw ?></span> &times; <span id='resultHeight'><?php echo $mh ?></span> pixels.
</p>	

	
	<p>
			
			<form action="module_image.php">
				<input type="hidden" name="image" value="<?php echo $img->name; ?>" />
		<input type="hidden" name="crop" value="<?php echo $img->new_name; ?>" />
		<input type="hidden" name="ext" value="<?php echo $img->ext; ?>" />	
		<input type="hidden" name="redir" value="1" />	
	
			<input type="hidden" name="crop_x" id="crop_x" />
			<input type="hidden" name="crop_y" id="crop_y" />
			<input type="hidden" name="crop_w" id="crop_w" />
			<input type="hidden" name="crop_h" id="crop_h" />
			<input type="hidden" name="type" id="type" />
			<input type="hidden" name="factor" id="factor" value="<?php echo $factor; ?>" />
			<input type="submit" value="Create Thumbnail" />
			
			</form>
		</p>
	
	

</div>

<?php
}


function print_module_footer () {

	global $img;

	printf("	<div style='float:left; padding-left: 20px;'>&rarr; Go <a href=\"module_image.php?image=%s\">back</a>, if the thumbnail is not satisfactory.<br />\n", $img->name);
	//print("&rarr; <a href=\"upload.php\">Upload</a> something else<br />\n");
	print("&rarr; <a href='javascript:self.close();'>Close</a> this window</div>\n");
	print("<script>if(window.opener){
		var pos = 'x' + window.opener.location; 
		if ((pos.indexOf('insert_popup'))<1) { window.opener.location.reload();} }</script>");
	echo "</div>";
}

?>
</body>
</html>
