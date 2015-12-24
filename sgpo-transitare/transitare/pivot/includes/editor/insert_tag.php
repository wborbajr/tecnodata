<?php

chdir('../../');
include ('pv_core.php');
CheckLogin();
LoadUserlanguage();


if (isset($_GET['f_target'])) {
	$target= $_GET['f_target'];
} else {
	$target= $_POST['f_target'];
}

$text = urldecode($_GET['text']);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $CurrentEncoding; ?>\"" />
	<title>Pivot &#187; <?php echo lang('tags', 'insert_tag'); ?></title>
	<link href="../../<?php echo $theme['css']; ?>" rel="stylesheet" type="text/css" />
	<script language="JavaScript" src="../js/jquery.js" type="text/javascript"></script>
	<script language="JavaScript" src="../js/switch.js" type="text/javascript"></script>
	<script language="JavaScript" src="../calendar/datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    //We need to submit this to the opener, that is to the editor
    function do_submit_tag(tag, link){
    	window.opener.doTag(tag, link, '<?php echo $target; ?>');
    	window.close();
    }


    //]]>
    </script>
</head>
<body style="margin: 6px 6px 6px 6px; background-image: none;" onload="document.pick_f_image.f_tag.select();";>
<form name="pick_f_image" action="" Method="POST" onsubmit="do_submit_tag(document.pick_f_image.f_tag.value, document.pick_f_image.f_link.value);">
  <table width="100%">
		<tr>
		  <td colspan="2"><b><?php echo lang('tags', 'insert_tag'); ?>:</b> <br />
		    <br />
		    <?php echo lang('tags', 'insert_tag_desc'); ?> </td>
    </tr>
			<tr>
			  <td><b><?php echo lang('tags', 'tag'); ?>:</b></td>
    <td>


<input name="f_tag" id="f_tag" type="text" class="input" style="width:98%" value="<?php echo stripslashes($text); ?>">
  </td>
    </tr>

		<tr>
		  <td><b><?php echo lang('link', 'url'); ?>:</b></td>
    <td><input name="f_link" id="f_link" type="text"  class="input" style="width:98%" value=""> </td>
</tr>


    <tr> <td>&nbsp;</td>
      <td><input type='button' name='Submit' value='<?php echo lang('go'); ?>' class='button' onClick="do_submit_tag(document.pick_f_image.f_tag.value, document.pick_f_image.f_link.value);" />
      &nbsp;&nbsp;
      <input name="cancel" type="button" class="button" id="cancel" value="<?php echo lang('cancel'); ?>" onClick="self.close();" /></td>
    </tr>
  </table>
  <hr size="1" noshade>

  <p><strong><?php echo lang('tags', 'suggested_tags'); ?>:</strong></p>

<p><span id='suggestedtags'> <?php

$minsize=11;
$maxsize=19;
$amount=50;

$tagcosmos = getTagCosmos($amount);

foreach($tagcosmos['tags'] as $key => $value)	{

	// Calculate the size, depending on value.
	$nSize = round($minsize + ($value/$tagcosmos['maxvalue']) * ($maxsize - $minsize));

	$htmllinks[$key] = sprintf("<a style=\"font-size:%spx;\" rel=\"dialogtag\" title=\"%s: %s, %s %s\">%s</a>\n",
	$nSize,
	lang('tags', 'tag'),
	$key,
	$value,
	lang('userbar', 'entries'),
	str_replace("+"," ",$key)
	);
}

$output .= implode(" ", $htmllinks);

if ($amount < $tagcosmos['amount']) {
	// We need to print the 'all' link..
	$output .= sprintf('<em>(<a href="javascript:getalltags(\'../../\',\'tag dialog\');">%s</a>)</em>', lang('general', 'all'));
}

echo $output;

?>

</span></p>

</form>
</html>
</body>
