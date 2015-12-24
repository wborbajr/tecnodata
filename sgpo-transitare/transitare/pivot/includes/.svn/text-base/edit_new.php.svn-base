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

// Lamer protection
$currentfile = basename(__FILE__);
require_once dirname(dirname(__FILE__))."/lamer_protection.php";


if (!(isset ($Users[ $Pivot_Vars['user'] ]['wysiwyg']))) {
	$useWysiwyg = $Cfg['wysiwyg_editor']==1 ? TRUE : FALSE;
} else if ( ($Users[ $Pivot_Vars['user'] ]['wysiwyg'] == 1) || (strtolower($Users[ $Pivot_Vars['user'] ]['wysiwyg']) == 'yes') ) {
	$useWysiwyg = TRUE;
} else {
	$useWysiwyg = FALSE;
}


if (($useWysiwyg) ) {
	if (file_exists($Paths['extensions_path']."hooks/pre_editor_wysi.php")) {
		include_once($Paths['extensions_path']."hooks/pre_editor_wysi.php");
	}
} else {
	if (file_exists($Paths['extensions_path']."hooks/pre_editor_normal.php")) {
		include_once($Paths['extensions_path']."hooks/pre_editor_normal.php");
	}
}


if ($useWysiwyg) {
	if (function_exists("pre_editor_wysi_init")) {
		// If the pre_editor_wysi hook is present..
		$beforesubmitclick = "";
		$beforesubmitclick2 = "onclick='openPreview()'";
		pre_editor_wysi_init();
	} else {
		// Just use the standard wysi editor
		echo "<script language='JavaScript' src='includes/editor/editor_ie.js'></script>\n";
		$beforesubmitclick = "onclick='allContentToTextarea();'";
		$beforesubmitclick2 = "onclick='allContentToTextarea(); openPreview()'";
	}
} else {
	if (function_exists("pre_editor_normal_init")) {
		// If the pre_editor_normal hook is present..
		pre_editor_normal_init();
		$beforesubmitclick = "";
		$beforesubmitclick2 = "onclick='openPreview()'";

	} else {
		// Just use the standard non-wysiwyg editor
		echo "<script language='JavaScript' src='includes/editor/editor_alt.js'></script>\n";
		$beforesubmitclick = "";
		$beforesubmitclick2 = "onclick='openPreview()'";

	}

}



function insert_wysiwyg($name) {
	global $entry, $useWysiwyg, $Cfg;

	$js_name="'f_".$name."'";


	// if opening an entry in wysiwyg, that was created in non-wysi
	// we might need to convert / textile / markdown it.

	if ($entry['convert_lb']==1) {
		$entry[$name]=strip_trailing_space(nl2br($entry[$name]));
	} else if ($entry['convert_lb']==2) {
		list ($tags, $entry[$name]) = translate_tags($entry[$name]);
		$entry[$name] = pivot_textile( $entry[$name] );
		$entry[$name] = untranslate_tags($tags, $entry[$name]);
	} else if ( ($entry['convert_lb']==3) || ($entry['convert_lb']==4) ) {
		list ($tags, $entry[$name]) = translate_tags($entry[$name]);
		$entry[$name] = pivot_markdown( $entry[$name], $entry['convert_lb'] );
		$entry[$name] = untranslate_tags($tags, $entry[$name]);
	}

	if (function_exists("pre_editor_wysi")) {
		// If the pre_editor_wysi hook is present..
		pre_editor_wysi("f_".$name."_text", addltgt($entry[$name]));
	} else {
		if (!isset($entry[$name]) || strlen(strip_tags($entry[$name]))<2) {
			$entry[$name] = "<p></p>";
		}

		// Just use the standard wysi editor

		include "includes/editor/edit_menu.php";
		echo "<iframe id=$js_name name=$js_name width='99%' height='160' marginwidth='4' marginheight='4' frameborder='0' style='border: 1px #cccccc solid; background-color:#FFF;' class='input' />If you can read this, the editor is not initiaised. You can try doing that now by clicking the icon with the little lightning arrow in the buttons-bar. If that does not work, you should set the 'use wysiwyg editor' in your 'My Info' to 'no'.</iframe>";
		echo "<br /><br /><textarea class='input hidden' cols='60' rows=1 id='f_".$name."_text' name='f_".$name."_text' style='width:98%;'>".addltgt($entry[$name])."</textarea>\n\n";

		// enable the wysiwyg for editing..
		echo "<script language='javascript' type='text/javascript'>\nsetTimeout( \"enable_edit($js_name, 'f_".$name."_text')\" , 10);\n</script>";


	}




}



/**
 * When we translate a textile or markdown entry for editing using a wysiwyg editor,
 * we should make sure the [[ tags ]] aren't parsed. That's why we make a list of them,
 * so we can translate back later.
 *
 * @param string $name
 * @return array
 */
function translate_tags($text) {

	preg_match_all ("|\[\[(.*)\]\]|U", $text, $matches, PREG_PATTERN_ORDER);

	foreach ($matches[0] as $key => $match) {
		$text = str_replace($match, "[[[$key]]]", $text);
	}

	return array($matches[0], $text);

}

/**
 * When we translate a textile or markdown entry for editing using a wysiwyg editor,
 * we should make sure the [[ tags ]] aren't parsed. Here we translate them back to the original tags
 *
 * @param string $name
 * @return array
 */
function untranslate_tags($matches, $text) {

	foreach ($matches as $key => $match) {
		$text = str_replace("[[[$key]]]", $match, $text);
	}

	return $text;

}



function insert_textarea($name) {
	global $entry, $useWysiwyg, $Cfg;

	$js_name="'f_".$name."'";
	include "includes/editor/edit_menu.php";

	// JM =*=*= 2004/09/26
	// changed "entify" to htmlentities() before "($entry[$name])" to stop multiplying &amp;s in Firefox

	//echo htmlspecialchars($entry[$name]);

	echo "<textarea class='resizable' cols='60' rows='6' name=$js_name id=$js_name style='width:100%; height:160px;";
	echo "line-height:18px; background:#FFF;'  onSelect='storeCaret(this);' onClick='storeCaret(this);' onKeyUp='storeCaret(this);'>";
	echo htmlspecialchars($entry[$name]);
	echo "</textarea>";

}



function insert_convert_lb($useWysiwig) {
	global $entry, $Cfg;

	if ($useWysiwig) {
		echo '<input name="convert_lb" type="hidden" id="convert_lb" value="0" checked>';
	} else {

		if (!isset($entry['convert_lb'])) {
			$entry['convert_lb'] = $Cfg['text_processing'];
		}
		echo "<tr valign='baseline'><td valign='top'><strong>";
		echo lang('config','text_processing');
		echo ":</strong></td><td colspan='3' valign='baseline'>";
		echo "<select name='convert_lb' class='input' id='convert_lb'>";
		echo "	<option value='0'".($entry['convert_lb']==0 ? " selected" : "" ).">".lang('config', 'none')."</option>\n";
		echo "	<option value='1'".($entry['convert_lb']==1 ? " selected" : "" ).">".lang('config', 'convert_br')."</option>\n";
		echo "	<option value='2'".($entry['convert_lb']==2 ? " selected" : "" ).">".lang('config', 'textile')."</option>";
		echo "	<option value='3'".($entry['convert_lb']==3 ? " selected" : "" ).">".lang('config', 'markdown')."</option>";
		echo "	<option value='4'".($entry['convert_lb']==4 ? " selected" : "" ).">".lang('config', 'markdown_smartypants')."</option>";
			echo "</select>\n";
	}

}


// these are parameters from the bookmarklet..
if (isset ($Pivot_Vars['url'])) {
	$entry['title'] = $Pivot_Vars['t'];

	if ( ($Users[ $Pivot_Vars['user'] ]['wysiwyg']==0) && ($Cfg['text_processing']==1) ) {

		$entry['introduction'] = sprintf("%s\n\n<a href=\"%s\" title=\"%s\">%s</a>", stripslashes($Pivot_Vars['i']), $Pivot_Vars['url'], $Pivot_Vars['t'], $Pivot_Vars['url']);

	} else if ( ($Users[ $Pivot_Vars['user'] ]['wysiwyg']==0) && ($Cfg['text_processing']==2) ) {

		$entry['introduction'] = sprintf("%s\n\n\"%s\":%s", stripslashes($Pivot_Vars['i']),  $Pivot_Vars['t'], $Pivot_Vars['url']);

	} else {
		$entry['introduction'] = sprintf("%s<br /><br /><a href=\"%s\" title=\"%s\">%s</a>", stripslashes($Pivot_Vars['i']), $Pivot_Vars['url'], $Pivot_Vars['t'], $Pivot_Vars['url']);
	}
}




// The useragent string (lowercase to simplify testing)
$_nw_ua = strtolower(@$_SERVER["HTTP_USER_AGENT"]);

// Opera software Opera
define("NW_IS_OPERA", preg_match('/opera[\s\/](\d+\.\d+)/', $_nw_ua, $_nw_v) ? (float) $_nw_v[1] : 0);

// Microsoft Internet Explorer
define("NW_IS_IE", !NW_IS_OPERA && preg_match('/msie (\d+\.\d+)/', $_nw_ua, $_nw_v) ? (float) $_nw_v[1] : 0);

// Gecko-based browsers, such as Mozilla, Netscape 6, Firenerd,
define("NW_IS_GECKO", preg_match('/gecko\/(\d+)/', $_nw_ua, $_nw_v) ? (float) $_nw_v[1] : 0);


?>

<script language='JavaScript'>


// set standard view to basic (meaning, only most used fields are shown)
<?php if($Users[ $Pivot_Vars['user'] ]['view'] == 1)  {?>
var view="basic";
<?php } else {?>
var view="extended";
<?php  }?>

var wysialert = 0;
// The Browser needs a timeout to enable the editor. this is called only once, after loading..
function enable_edit(name, textarea_name) {

	doc = document.getElementById(name).contentWindow.document;

	try	{
		doc.designMode='on';
		doc.execCommand("undo", false, null);
		doc.open("text/html","replace")
		doc.write('<STYLE>BODY { font: 11px/15px verdana, helvetica, sans-serif; }</STYLE>')
		doc.close();
		if (is_gecko) {
			doc.execCommand("useCSS", false, null);
		}
		copyTextareaToEdit(name, textarea_name);
		//document.getElementById('activate_'+name).innerHTML = "";

	} catch (e) {
		if (wysialert==0) {
			alert("Wysiwyg does not work on your browser");
			wysialert++;
		}
	}

}


// this function is used to synchronise the two category selects..
function syncCat1(mySelect) {

	var selected = mySelect.selectedIndex;
	var length = mySelect.length;

	if (selected == length-1) {
		// selected 'none'
		document.form1.f_catmult.selectedIndex = -1;
	} else if ( (selected == length - 2) ) {
		// selected 'multiple'.. do nothing
	} else {
		document.form1.f_catmult.selectedIndex = mySelect.selectedIndex;
	}
}


// this function is used to synchronise the two category selects..
function syncCat2(mySelect) {

	var count=0;
	var selected=0;

	for (i=0;i<mySelect.length;i++) {
		if (mySelect.options[i].selected) {
			count++;
			selected=i;
		}
	}

	if (count==0) {
		// if nothing is selected..
		document.form1.f_catsing.selectedIndex = document.form1.f_catsing.length-1;
	} else if (count==1) {
		// if exactly one is selected
		document.form1.f_catsing.selectedIndex = selected;
	} else if (count>1) {
		// if more than one are selected
		document.form1.f_catsing.selectedIndex = document.form1.f_catsing.length-2;
	}
}


function set_select(name, value) {

	var elm = document.getElementById(name);
	//alert(elm);
	elm.selectedIndex = value;
}

function toggle() {
        var basic_view="<?php echo lang("basic_view"); ?>";
        var extended_view="<?php echo lang("extended_view"); ?>";
	if (view=="extended") {

		view="basic";

		document.getElementById('extended0').style.display = 'none';
		document.getElementById('extended0').style.visibility='hidden';

		document.getElementById('extended1').style.display = 'block';
		document.getElementById('extended1').style.visibility='visible';

		document.getElementById('extended3').style.display = 'none';
		document.getElementById('extended3').style.visibility='hidden';

		document.getElementById('extended4').style.display = 'block';
		document.getElementById('extended4').style.visibility='visible';

		document.getElementById('extended5').style.display = 'none';
		document.getElementById('extended5').style.visibility='hidden';

		document.getElementById('extended_label').innerHTML="&raquo; " + extended_view;

		//document.getElementById('f_body').style.height = '120px';
		//document.getElementById('f_introduction').style.height = '120px';

	} else {

		view="extended";

		document.getElementById('extended0').style.display = 'block';
		document.getElementById('extended0').style.visibility='visible';

		document.getElementById('extended1').style.display = 'none';
		document.getElementById('extended1').style.visibility='hidden';

		document.getElementById('extended3').style.display = 'block';
		document.getElementById('extended3').style.visibility='visible';

		document.getElementById('extended4').style.display = 'none';
		document.getElementById('extended4').style.visibility='hidden';

		document.getElementById('extended5').style.display = 'block';
		document.getElementById('extended5').style.visibility='visible';

		document.getElementById('extended_label').innerHTML="&raquo; " + basic_view;

		//document.getElementById('f_body').style.height = '300px';
		//document.getElementById('f_introduction').style.height = '200px';

	}


}


function set_now() {

	// always take server time. Not client's browser's javascript time!!
	var my_date= "<?php echo format_date("","%day% %monthname% %year%"); ?>";
	var my_time= "<?php echo format_date("","%hour24%-%minute%"); ?>";

	document.form1.f_date_1.value=my_date;
	document.form1.f_date_2.value=my_time;

}


function openLinkWindow(target) {

	<?php if ( ($useWysiwyg) && (strpos($Pivot_Vars['HTTP_USER_AGENT'], "MSIE ")>0) ) { ?>

		doLink("", "", "", target);

	<?php } else { ?>
		var width=380;
		if (is_safari) {
			var height=250;
		} else {
			var height=210;
		}

		var left = Math.floor( (screen.width - width) / 2);
		var top = Math.floor( (screen.height - height) / 2);
		var winParms = "location=no, status=yes, resizable=yes, top=" + top + ",left=" + left + ",height=" + height + ",width=" + width;

		var f_text = escape(getSel(target));
		var f_url= "";
		var f_title= "";
		var my_url = 'includes/editor/insert_link.php?session=<?php echo $Pivot_Vars['session']; ?>&url='+ f_url +'&text='+ f_text +'&title='+ f_title +'&f_target='+target;
		window.open(my_url,'link', winParms);
	<?php } ?>
}



function openImageWindow(target) {

	var width=390;
	if (is_safari) {
		var height=360;
	} else {
		var height=320;
	}

	var f_text = escape(getSel(target));

	var left = Math.floor( (screen.width - width) / 2);
	var top = Math.floor( (screen.height - height) / 2);
	var winParms = "location=no, status=yes, resizable=yes, top=" + top + ",left=" + left + ",height=" + height + ",width=" + width;

	var f_image= document.form1.f_image.value;
	var my_url = 'includes/editor/insert_image.php?session=<?php echo $Pivot_Vars['session']; ?>&f_image='+f_image+'&f_text='+ f_text +'&f_target='+target;
	window.open(my_url,'upload', winParms);

}


function openImagePopupWindow(target) {

	window.name="openerWindow";

	var width=430;
	if (is_safari) {
		var height=420;
	} else {
		var height=380;
	}

	var f_text = escape(getSel(target));

	var left = Math.floor( (screen.width - width) / 2);
	var top = Math.floor( (screen.height - height) / 2);
	var winParms = "location=no, status=yes, resizable=yes, top=" + top + ",left=" + left + ",height=" + height + ",width=" + width;

	var f_image= document.form1.f_image.value;
	var f_hasthumb= document.form1.f_hasthumb.value;

	var my_url = 'includes/editor/insert_popup.php?session=<?php echo $Pivot_Vars['session']; ?>&f_image='+f_image+'&f_text='+ f_text +'&f_hasthumb='+f_hasthumb+'&f_target='+target;
	window.open(my_url, 'upload', winParms);

}


function openDownloadWindow(target) {

	window.name="openerWindow";

	var width=430;
	if (is_safari) {
		var height=420;
	} else {
		var height=350;
	}

	var f_text = escape(getSel(target));

	var left = Math.floor( (screen.width - width) / 2);
	var top = Math.floor( (screen.height - height) / 2);
	var winParms = "location=no, status=yes, resizable=yes, top=" + top + ",left=" + left + ",height=" + height + ",width=" + width;

	var f_image= document.form1.f_image.value;
	var f_hasthumb= document.form1.f_hasthumb.value;

	var my_url = 'includes/editor/insert_download.php?session=<?php echo $Pivot_Vars['session']; ?>&f_image='+f_image+'&f_text='+ f_text +'&f_hasthumb='+f_hasthumb+'&f_target='+target;
	window.open(my_url, 'upload', winParms);

}



function openTagWindow(target) {

	window.name="openerWindow";

	var width=430;
	if (is_safari) {
		var height=420;
	} else {
		var height=350;
	}

	var f_text = escape(getSel(target));

	var left = Math.floor( (screen.width - width) / 2);
	var top = Math.floor( (screen.height - height) / 2);
	var winParms = "location=no, status=yes, resizable=yes, top=" + top + ",left=" + left + ",height=" + height + ",width=" + width;

	var my_url = 'includes/editor/insert_tag.php?session=<?php echo $Pivot_Vars['session']; ?>&text='+ f_text +'&f_target='+target;
	window.open(my_url, 'upload', winParms);

}




function openPreview() {

	document.form1.target="_blank";
	document.form1.action="entry.php";
	document.form1.submit();

	document.form1.target="_self";
	document.form1.action="<?php
		$myurl = sprintf("index.php?session=%s&menu=entries&func=entrysubmit", $Pivot_Vars['session']);
		echo $myurl; ?>";


}


// attach keycatching script..
document.onkeypress = function (e) {

	if (document.all) {
		chr=event.keyCode;
		if ( (chr==2) ) { doHead('bold', g_txtarea); return false; } // ctrl-b or ctrl-shift-b
		if ( (chr==9) ) { doHead('italic', g_txtarea); return false; } // ctrl-i or ctrl-shift-i
		if ( (chr==4) || (chr==12) ) { doLink(g_txtarea); return false; } // ctrl-d, ctrl-shift-d, ctrl-l or ctrl-shift-l
		if ( (chr==5) ) { openImageWindow(g_txtarea); return false; } // ctrl-e or ctrl-shift-e
		if ( (chr==18) ) { openImagePopupWindow(g_txtarea); return false; } // ctrl-r or ctrl-shift-r
	} else if (document.getElementById) {
		ctrl=e.ctrlKey; shft=e.shiftKey; chr=e.charCode;
		if ( (ctrl) && ( (chr==66) || (chr==98) ) ) { doHead('bold', g_txtarea); return false; } // ctrl-b or ctrl-shift-b
		if ( (ctrl) && ( (chr==73) || (chr==105) ) ) { doHead('italic', g_txtarea); return false; } // ctrl-i or ctrl-shift-i
		if ( (ctrl) && ( (chr==68) || (chr==100) || (chr==76) || (chr==108) ) ) { doLink(g_txtarea); return false; } // ctrl-d, ctrl-shift-d, ctrl-l or ctrl-shift-l
		if ( (ctrl) && ( (chr==69) || (chr==101) ) ) { openImageWindow(g_txtarea); return false; } // ctrl-e or ctrl-shift-e
		if ( (ctrl) && ( (chr==82) || (chr==114) ) ) { openImagePopupWindow(g_txtarea); return false; } // ctrl-r or ctrl-shift-r
	}

	return true;
}


</script>


<?php

// If one of the weblogs has a different encoding than the current user's
// language, we print out a warning.
foreach ($Weblogs as $weblog) {

	// weblog's language
	$language = $weblog['language'];

	// Load the language if it's not loaded yet.
	if (!isset($Language[$language])) {
		$Language[$language] = new LangClass($language);
	}

	// Print the message, if the encoding doesn't match up..
	if (strcasecmp($Language[$language]->encoding, $CurrentEncoding)) {
		$message = "<p style='border: 1px dashed #999; background-color: #F2F2F2; padding: 12px;'>".lang('entries', 'encoding_warning')."</p>";
		printf($message, $CurrentEncoding);
		break;
	}

}

?>

<form method='post' name='form1' action='<?php

$myurl = sprintf("index.php?session=%s&menu=entries&func=entrysubmit", $Pivot_Vars['session']);

echo $myurl;

?>' class='nopadding' name='form1'>

  <table  width="<?php if (NW_IS_GECKO || NW_IS_OPERA) { echo "99%"; } else { echo "95%"; } ?>"  border='0' cellpadding='4' cellspacing='0'>
    <tr>
      <td width="90"><strong><?php echo lang('entries' , 'title'); ?>:</strong></td>
      <td colspan="3"><input type='text' name='f_title' size='48' value="<?php echo addquotes($entry['title']); ?>" class='input' style='height:22px;'></td>
      <td align="right">
      <input type='button' name='preview' value='<?php echo lang('entries' , 'preview_entry'); ?>' class='button' <?php echo $beforesubmitclick2; ?>>
      	<input type='submit' name='submit1' value='<?php echo lang('entries' , 'post_entry'); ?>' class='button' <?php if ($useWysiwyg) echo  $beforesubmitclick; ?> style="font-weight: bold";>
          <input type='button' name='button2' value='e2t' class='button hidden'<?php if ($useWysiwyg) echo $beforesubmitclick; ?>>
        </td>
    </tr>
	</table>
<!-- start table 'Subtitle' -->
<table  width="<?php if (NW_IS_GECKO || NW_IS_OPERA) { echo "99%"; } else { echo "95%"; } ?>"  border='0' cellpadding='4' cellspacing='0' class="hidden" id="extended0">
    <tr>
      <td width="90"><strong><?php echo lang('entries' , 'subtitle'); ?>:</strong></td>
      <td colspan="3"><input type='text' name='f_subtitle' size='50' value="<?php echo addquotes($entry['subtitle']); ?>" class='input' style='height:22px;'></td>
        <td align="right">

          <input type='button' name='button' value='t2e' class='button hidden' onClick="allTextareaToContent();"></td>
    </tr>	</table>
<!-- end table 'Subtitle' -->
<!-- start table 'Less Options' -->
<table  width="<?php if (NW_IS_GECKO || NW_IS_OPERA) { echo "99%"; } else { echo "95%"; } ?>"  border='0' cellpadding='4' cellspacing='0' id="extended1">
    <tr>
      <td width="90"><strong><?php echo lang('entries' , 'post_status'); ?>:</strong></td>
      <td width="90"><select name='f_status' class="input" id="f_status" onChange="set_select('f_status2', document.form1.f_status.selectedIndex);">
            <option value="publish" <?php if ($entry['status']=='publish') { echo "selected"; } ?>>Publish</option>
            <option value="timed" <?php if ($entry['status']=='timed') { echo "selected"; } ?>>Timed Publish</option>
            <option value="hold" <?php if ($entry['status']=='hold') { echo "selected"; } ?>>Hold</option>
        </select></td>
      <td width="90"><strong><?php echo lang('entries' , 'category'); ?>:</strong></td>
      <td width="140"><?php echo get_categories_select("single"); ?></td>
      <td align="right">
          <input type='button' name='button3' value='t2e' class='button hidden' onClick="allTextareaToContent();"></td>
    </tr>
	</table>
  <!-- end table 'Less Options' -->
    <table  width="<?php if (NW_IS_GECKO || NW_IS_OPERA) { echo "99%"; } else { echo "95%"; } ?>"  border='0' cellpadding="0" cellspacing='0'>
      <tr>
        <td colspan=5><hr size="1" noshade></td>
      </tr>
      <tr>
        <td colspan=5 class="hidden">These will be hidden:
          <input name="f_image" type="text" class="input" id="f_image" value="">
          <input name="f_hasthumb" type="text" class="input" id="f_hasthumb" value="">
          <input type='text' name='f_mode' size='10' value='' class='input' /></td>
      </tr>
      <tr>
        <td height="36" colspan=5><strong><?php echo lang('entries' , 'introduction'); ?>:</strong><br />
          <?php


if ($useWysiwyg) {
	insert_wysiwyg('introduction');
} else {
	insert_textarea('introduction');
}
?>
        </td>
      </tr>
    </table>

<!-- start table 'Body' -->
<div id="extended2">
	<table width="<?php if (NW_IS_GECKO || NW_IS_OPERA) { echo "99%"; } else { echo "95%"; } ?>" border='0' cellpadding="0" cellspacing='0'>
    <tr>
      <td><strong><?php
      		echo lang('entries' , 'body');
      		?>:</strong><br />
        <?php

if ($useWysiwyg) {
	insert_wysiwyg('body');
} else {
	insert_textarea('body');
}
?>
      </td>
    </tr>
  </table></div>
<!-- end table 'Body' -->
<!-- start table 'More Options' -->
    <table  width="95%"  border='0' cellpadding='4' cellspacing='0' class="hidden"  id="extended3">
      <tr>
        <td colspan=5><hr size="1" noshade></td>
      </tr>
      <tr valign="baseline">
        <td width="120" valign="top"><strong><?php echo lang('entries' , 'post_status'); ?>:</strong></td>
               <td width="21%" valign="top" ><select name='f_status2' id='f_status2' class="input"  onChange="set_select('f_status', document.form1.f_status2.selectedIndex);">
            <option value="publish" <?php if ($entry['status']=='publish') { echo "selected"; } ?>>Publish</option>
            <option value="timed" <?php if ($entry['status']=='timed') { echo "selected"; } ?>>Timed Publish</option>
            <option value="hold" <?php if ($entry['status']=='hold') { echo "selected"; } ?>>Hold</option>
          </select> </td>
        <td width="15%" valign="top"><strong><?php echo lang('entries' , 'publish_on'); ?>:</strong></td>
        <td width="47%" valign="top"><input name="f_publishdate_1" type="text" class='input date-picker' id="f_publishdate_1" value="<?php echo format_date($entry['publish_date'],"%month%-%day%-%year%"); ?>" size="15" />


          <input name="f_publishdate_2" type="text" class='input' id="f_publishdate_2" value="<?php echo format_date($entry['publish_date'],"%hour24%-%minute%"); ?>" size="7">
        </td>
      </tr>

<tr valign="baseline">
	<td valign="top"><b><?php echo lang('entries' , 'keywords'); ?>:</b></td>
	<td colspan="3" valign="top">
	<?php

	// To allow people to delete [[tt:tags]] that where 'auto-added' to the tags field, we do not display them here.

	$tags = getTags(false); // All tags in entry..
	$texttags = getTags(false, $entry['introduction'].$entry['body'], ''); // Only the tags in introduction and body

	// Remove all tags found in the text from $tags, that we will display in keywords field:
	if (is_array($texttags)) {
	    $tags = array_diff($tags, $texttags);
	}

	$tags = implode(", ", $tags);

    ?>
	<input type="text" name="f_keywords" id="f_keywords" size="60" class='input' value="<?php echo htmlspecialchars(stripslashes($tags)); ?>" />
	<input type="hidden" name="f_keywords_old" id="f_keywords_old" value="<?php echo htmlspecialchars(stripslashes($entry['keywords'])); ?>" />
	<br /><?php

	echo "<p style='width:450px;'><strong>" . lang('tags', 'suggested_tags') . ":</strong> <span id='suggestedtags'>";

 	$minsize=11;
	$maxsize=19;
	$amount=50;

 	$tagcosmos = getTagCosmos($amount);

	foreach($tagcosmos['tags'] as $key => $value)	{

		// Calculate the size, depending on value.
		$nSize = round($minsize + ($value/$tagcosmos['maxvalue']) * ($maxsize - $minsize));

		// Write the tags, we add events to them using jquery.
		$htmllinks[$key] = sprintf("<a style=\"font-size:%spx;\" rel=\"tag\" title=\"%s: %s, %s %s\">%s</a>\n",
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
		$output .= sprintf('<em>(<a href="javascript:getalltags(\'\',\'entrypage\');">%s</a>)</em>', lang('general', 'all'));
	}

	$output .="</span></p>";

	echo $output;


	?> </td>
</tr>


<tr valign="baseline">
	<td valign="top"><b><?php echo lang('entries' , 'vialink'); ?>:</b></td>
	<td colspan="3" valign="top"><input type="text" name="f_vialink" size="60" class='input' value="<?php echo $entry['vialink']; ?>" /></td>
</tr>

<tr valign="baseline">
	<td valign="top"><b><?php echo lang('entries' , 'viatitle'); ?>:</b></td>
	<td colspan="3" valign="top"><input type="text" name="f_viatitle" size="60" class='input' value="<?php echo $entry['viatitle']; ?>" />
	<br /><?php echo lang('entries' , 'via_desc'); ?> </td>
</tr>

<tr valign="baseline">
	<td valign="top"><b><?php echo lang('entries' , 'trackback'); ?>:</b></td>
	<td colspan="3" valign="top">
	<textarea class="input_small resizable" cols="60" rows="2" name="tb_url" id="tb_url"><?php echo $entry['tb_url']; ?></textarea>
	<br /><?php echo lang('entries' , 'trackback_desc'); ?> </td>
</tr>


      <tr valign="baseline">
        <td width="120" valign="top"><b><?php echo lang('entries' , 'category'); ?>:</b></td>
        <td valign="top"><?php echo get_categories_select("multi"); ?></td>
        <td colspan="2" valign="bottom"><?php echo lang('entries' , 'select_multi_cats'); ?>:</td>
      </tr>
      <tr>
        <td colspan=5><hr size="1" noshade></td>
      </tr>
      <tr valign="baseline">
        <td width="120" valign="top"><strong><?php echo str_replace(" ", "&nbsp;", lang('entries' , 'allow_comments'));  ?>:</strong></td>

				<?php



				// set the correct 'allow comments'..
				if (($entry['allow_comments']==1) ) {
					$sel_yes="checked"; $sel_no="";
				} else  if ( (isset($entry['allow_comments'])) || ($entry['allow_comments']===0) ){
					$sel_yes=""; $sel_no="checked";
				} else {
					// take the default from config..
					if ( (isset($Cfg['allow_comments'])) && ($Cfg['allow_comments']==0) ) {
						$sel_yes=""; $sel_no="checked";
					} else {
						$sel_yes="checked"; $sel_no="";
					}

				}
				?>
          <td colspan="3" valign="top">
					<input name="f_allowcomments" type="radio" value="1" <?php echo $sel_yes; ?>>
					<?php echo lang('yes'); ?>&nbsp;&nbsp;
					<input type="radio" name="f_allowcomments" value="0"  <?php echo $sel_no; ?>>
					<?php echo lang('no'); ?></td>
      </tr>

          <?php

insert_convert_lb($useWysiwyg);

// Only allow advanced users and above to change the creation date.
$readonly = ( ($Users[$Pivot_Vars['user']]['userlevel'] < 2) ) ? "readonly='readonly'" : "" ;
$showcal = ( ($Users[$Pivot_Vars['user']]['userlevel'] < 2) ) ? "" : "date-picker" ;

?>
          </td>
      </tr>
      <tr>
        <td colspan=5><hr size="1" noshade> </td>
      </tr>
      <tr valign="baseline">
        <td valign="top"><b><?php echo lang('entries' , 'created_on'); ?>:</b> </td>
        <td colspan="3" valign="top"><input name="f_createdate_1" type="text" class='input dim <?php echo $showcal; ?>' id="f_createdate_1" value="<?php echo ($entry['date']=="" ? "00-00-0000" : format_date($entry['date'],"%month%-%day%-%year%")); ?>" size="18" <?php echo $readonly; ?> />

          <input name="f_createdate_2" type="text" class='input dim' id="f_createdate_2"
	value="<?php echo ($entry['date']=="" ? "00-00" : format_date($entry['date'],"%hour24%-%minute%")); ?>" size="10" <?php echo $readonly; ?> /></td>

      </tr>
      <tr valign="baseline">
        <td valign="top"><strong><?php echo lang('entries' , 'last_edited'); ?>:</strong></td>
        <td colspan="3" valign="top"><input name="f_editdate_1" type="text" class='input dim' id="f_editdate_1" value="<?php echo format_date($entry['edit_date'],"%month%-%day%-%year%"); ?>" size="18" readonly='readonly' />

          <input name="f_editdate_2" type="text" class='input dim' id="f_editdate_2"
	value="<?php echo format_date($entry['edit_date'],"%hour24%-%minute%"); ?>" size="10" readonly='readonly' />
        </td>
      </tr>
      <tr valign="baseline">
        <td valign="top"><b><?php echo lang('entries' , 'author'); ?>:</b></td>
        <td colspan="3" valign="top"><input type="text" name="f_user" size="15" value="<?php if (isset($entry['user'])) { echo $entry['user']; } else { echo $Pivot_Vars['user']; }  ?>" class='input dim' <?php echo $readonly; ?>></td>
      </tr>
      <tr valign="baseline">
        <td valign="top"><b><?php echo lang('entries' , 'code'); ?>:</b></td>
        <td valign="top"><input type="text" name="f_code" size="15" value="<?php echo $entry['code']?>" class='input dim' readonly='readonly' /></td>
        <td colspan="2" valign="top"><?php echo lang('entries' , 'be_careful'); ?>
          <input name="f_code_orig" type="hidden" class='input' id="f_code_orig" value="<?php echo $entry['code']?>" size="15" /></td>
      </tr>
    </table>
   <p>&nbsp; </p>
<!-- end table 'More options' -->
<!-- start table 'Further Options' -->
  <table  width="95%"  border="0" cellpadding="5" cellspacing="0">
	<tr>
		<td>
			<h2 style="margin-left:0px;"><?php echo lang('further_options'); ?>:</h2>
		</td>
		<td align="right">
			<input type='button' name='preview' value='<?php echo lang('entries' , 'preview_entry'); ?>' class='button' <?php echo $beforesubmitclick2; ?>>
			<input type='submit' name='submit1' value='<?php echo lang('entries' , 'post_entry'); ?>' class='button' <?php if ($useWysiwyg) echo $beforesubmitclick; ?> style="font-weight: bold";>
		</td>
	</tr>
	</table>
<!-- end table 'Further Options' -->
<!-- start table 'Extended View' -->
	<table  width="95%"  border="0" cellpadding="5" cellspacing="0" id="extended4">
    <tr>
      <td width="32" valign="top"><?php print_icon('entry', 'extended_view', "<a href=\"javascript:toggle();\">"); ?></td>
      <td><h3><a href="javascript:toggle();" ><?php echo lang('extended_view'); ?></a></h3>
        <p class="dim"><?php echo lang('extended_view_desc'); ?></p></td>
    </tr></table>
<!-- end table 'Extended View' -->
<!-- start table 'Basic View' -->
	<table  width="95%"  border="0" cellpadding="5" cellspacing="0" class="hidden" id="extended5">
    <tr>
      <td width="32" valign="top"><?php print_icon('entry', 'basic_view', "<a href=\"javascript:toggle();\">"); 	?></td>
      <td><h3><a href="javascript:toggle();" ><?php echo lang('basic_view'); ?></a></h3>
        <p class="dim"><?php echo lang('basic_view_desc'); ?></p></td>
    </tr></table>
<!-- end table 'Basic View' -->

<!-- edit comments -->
	<table  width="95%"  border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td width="32" valign="top"><?php
      $link = sprintf("index.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
      print_icon('entry', 'edit_comments', "<a href=\"".$link."\">");
      ?></td>
      <td><h3><a href="<?php

			echo $link;

			?>"><?php echo lang('entries' , 'edit_comments'); ?></a></h3>
        <p class="dim"><?php echo lang('entries' , 'edit_comments_desc'); ?></p></td>
    </tr>


<!-- edit trackbacks -->

    <tr>
      <td width="32" valign="top"><?php
      $link = sprintf("index.php?session=%s&amp;menu=entries&amp;func=edittrackbacks&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
      print_icon('entry', 'edit_comments', "<a href=\"".$link."\">");
      ?></td>
      <td><h3><a href="<?php

			echo $link;

			?>"><?php echo lang('entries' , 'edit_trackback'); ?></a></h3>
        <p class="dim"><?php echo lang('entries' , 'edit_trackback_desc'); ?></p></td>
    </tr>


	<!-- delete entry -->
    <tr>
      <td width="32" valign="top"><?php

      $link = sprintf("index.php?session=%s&amp;menu=entries&amp;doaction=1&amp;action=delete&amp;check[%s]=1", $Pivot_Vars['session'], $entry['code']);
      print_icon('entry', 'del_entry', "<a href=\"".$link."\">"); 	?></td>
      <td><h3><a href="<?php

			echo $link;

			?>"><?php echo lang('entries' , 'delete_entry'); ?></a></h3>
        <p class="dim"><?php echo lang('entries' , 'delete_entry_desc'); ?></p></td>
    </tr>
  </table>


</form>
</div>

<?php
if (($useWysiwyg) && (!function_exists("pre_editor_wysi_init"))) {
	echo "<sc"."ript>\n";
	echo "setTimeout('allTextareaToContent()', 100);\n";
	echo "self.focus();\n";
	echo "</"."script>";
	}
	if (isset( $Users[ $Pivot_Vars['user'] ]['view']) && ($Users[ $Pivot_Vars['user'] ]['view'] == 0) ) {
	echo "<sc"."ript type=\"text/javascript\">\n";
	echo "// open extended view!\n";
	echo "var view = 'basic';\n";
		echo "toggle();\n";
	echo "</"."script>";
	}
?>


