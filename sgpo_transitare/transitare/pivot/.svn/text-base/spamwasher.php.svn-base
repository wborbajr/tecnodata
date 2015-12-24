<?php

/*
==================================================================
     PIVOT BATCH SPAM REMOVER

Creator:                Hans Fredrik Nordhaug
E-mail:                 hans@nordhaug.priv.no
License:                GPL

Changes:

0.1 - 2006.03.20: Initial release.
0.2 - 2006.03.21: Added password protection. Now also removes deleted
  trackbacks from last trackbacks. Removed some trackback related
  foreach-warnings. Minor code clean-up.
0.3 - 2006.03.22: Using the Pivot login! Made the spam list have links
  to entry, comment and/or trackback screens in Pivot (since some
  people use this as a comment searcher)
0.4 - 2006.03.29: Using the functions load_serialize and save_serialize from
  Pivot making the script work for old Pivots too. Fixed stupid, but
  severe, bug for last comments deletion.
0.4.1 - 2006.03.30: Minor bug fix - the last comments were sorted
  in reverse.

==================================================================

For more info launch the script in a browser and read the help page.
*/

$version = "0.4.1 (2006.03.30)";

$currentfile = basename(__FILE__);
require dirname(__FILE__)."/lamer_protection.php";

$dir = dirname(__FILE__);
if (file_exists($dir."/pivot/pv_core.php")) {
    $pivot_dir = $dir."/pivot";
    $pivot_url = "pivot";
} elseif (file_exists($dir."/pv_core.php")) {
    $pivot_dir = $dir;
    $pivot_url = ".";
} else {
    die("Didn't find the Pivot directory!");
}

// removing lots of spam can take quite a while..
set_time_limit(0);

if ($_REQUEST["submit"] == "Remove Spam") {
    printheader("Removed");
    spam();
} else if ($_REQUEST["submit"] == "List Spam") {
    printheader("Listing");
    echo form("Remove Spam");
    spam();
} elseif ($_REQUEST["action"] == "help"){

	$link=sprintf("index.php?session=%s&amp;menu=admin&amp;func=admin&amp;do=spamwasher", $Pivot_Vars['session']);

    echo '
    <h2>Help</h2>

    <p>This tool helps you remove spam from comments and trackbacks in your Pivot.</p>
    <p>It has it\'s <a href="http://forum.pivotlog.net/viewtopic.php?t=9572">own thread</a>
    in the Pivot forum.  If you still have any questions after
    reading this page, ask your questions there.</p>

    <br />
    <h3>A warning</h3>
    <p class="warn"><b>The script has no undo-function.</b><br />
    So if you are paranoid or just want to be on the safe side: <em>Back-up the
    db-folder.</em> This script is still a work in progress. </p>

	<br />
    <h3>Known limitations</h3>
    <ul>
    <li>Does not support regular expressions (regexp) to find the spammy
    comments/trackbacks.</li>
    <li>If you have a lot of entries, the script might not work
    (because of the time-out limit in PHP). I have still not added
    the reload trick that Pivot uses.</li>
    </ul>

    <br />
    <h3>About</h3>
    <p>This script is written by Hans Nordhaug - "hansfn" in the
    <a href="http://forum.pivotlog.net/">Pivot Forums</a>.
    This is version '.$version.'. I wrote it as a reply to the recent spam
    wave - read more in the Pivot Forums -
    <a href="http://forum.pivotlog.net/viewtopic.php?t=9528">Finally some
    friendly spam</a>.</p>
    ';

    echo "<a href='$link'>Go back</a>.";


} else {

    if (isset($_REQUEST["action"])) {
		echo '<p class="error">Unknown action.</p>';
    }

    $link=sprintf("index.php?session=%s&amp;menu=admin&amp;func=admin&amp;do=spamwasher", $Pivot_Vars['session']);


    echo '    <p>This PHP script batch removes spam from comments and
    trackbacks.</p>
    <p>Read more on the <a href="'.$link.'&amp;action=help">help page</a>.</p>';

    echo form("List Spam");

}



function printheader($text) {

    if ($_REQUEST["what"] == "Comments") {
        echo '<h2>'.$text.' Spam from comments</h2>';
    } elseif ($_REQUEST["what"] == "Trackbacks") {
        echo '<h2>'.$text.' Spam from trackbacks</h2>';
    } elseif ($_REQUEST["what"] == "Both") {
        echo '<h2>'.$text.' Spam from comments and trackbacks</h2>';
    } else {
        echo '<p class="error">What spam to remove not given.</p>';
        echo $footer;
        exit(1);
    }
}



function form($text) {
	global $Pivot_Vars;

	$link=sprintf("index.php?session=%s&amp;menu=admin&amp;func=admin&amp;do=spamwasher", $Pivot_Vars['session']);

    $output = '
    <form action="'.$link.'" method="post">
    <table>
    <tr><td>Look in: </td><td>';
    if (!empty($_REQUEST["what"])) {
        $output .= '<input name="what" readonly="readonly" value="'.$_REQUEST["what"].'" style="background-color:#DDD;color:#777;">';
    } else {
        $output .=
    '<select name="what">
    <option value="Both">Both</option>
    <option value="Comments">Comments</option>
    <option value="Trackbacks">Trackbacks</option>
    </select>';
    }
    $output .= ' </td></tr>
    <tr><td>Spam text: </td><td>';
    if (!empty($_REQUEST["spamword"])) {
        $output .= '<input name="spamword" readonly="readonly" value="'.$_REQUEST["spamword"].'" style="background-color:#DDD;color:#777;">';
    } else {
        $output .= '<input name="spamword" value="">';
    }
    $output .= ' </td></tr>
    <tr><td colspan="2">
    <input type="submit" name="submit" value="'.$text.'" />
    </td></tr>
    </table>
    </form>';
    if ($text == "Remove Spam") {
        $output .= '
    <p>The form values above are read-only. If you want to change them, go <a href="javascript:history.go(-1);">back</a> in your browser.</p>';
    } else {
        $output .= '
    <p>Spam text (above) can match anything in the comment/trackback - name,
    IP, URL, comment/trackback and so on. This makes it quite poweful...</p>';
    }
    return $output;
}

function spam() {
    global $Paths, $Pivot_Vars;

    $entry_url = '<a target="_blank" href="index.php?menu=entries&amp;func=modify&amp;id=%s">%s</a>';
    $com_url = '<a target="_blank" href="index.php?menu=entries&amp;func=editcomments&amp;id=%s&amp;edit=%s">%s</a>';
    $tb_url = '<a target="_blank" href="index.php?menu=entries&amp;func=edittrackbacks&amp;id=%s&amp;edit=%s">%s</a>';

    if (($_REQUEST["what"] == "Trackbacks") || ($_REQUEST["what"] == "Both")) {
        $trackbacks = true;
    } else {
        $trackbacks = false;
    }
    if (($_REQUEST["what"] == "Comments") || ($_REQUEST["what"] == "Both")) {
        $comments = true;
    } else {
        $comments = false;
    }
    $tot_com_spam = 0;
    $tot_tb_spam = 0;

    if ($_REQUEST["submit"] == "Remove Spam") {
        if ($comments) {
            $last_comms = load_serialize("./db/ser_lastcomm.php",true,true);
        }
        if ($trackbacks) {
            $last_tracks = load_serialize("./db/ser_lasttrack.php",true,true);
        }
    }
    $spam_db = new db();
    $entries = $spam_db->getlist($spam_db->get_entries_count());

    foreach ($entries as $entry) {
        $entry_id = $entry['code'];
        $data = $spam_db->read_entry($entry_id);
        foreach ($data as $key => $value) {

            if (($key == "trackbacks") && (count($data["trackbacks"])>0) && $trackbacks) {
                foreach ($data["trackbacks"] as $tbid => $tb) {
                    $text = implode(" ", $tb);

                    if (strpos(strtolower($text),strtolower($_REQUEST["spamword"])) !== false) {



                        $output .= sprintf("<tr class='%s'><td valign='top'>%s</td><td valign='top'>%s</td>
                        			<td valign='top'>%s</td>",
                        		(($tot_tb_spam+$tot_com_spam) % 2) ? "tabular_line_even" : "tabular_line_odd",
                        		sprintf($entry_url,$entry_id,$entry_id),
                        		sprintf($tb_url,$entry_id,$tbid,"Trackback&nbsp;".$tbid),
                        		$text
                        	);


                        $tot_tb_spam ++;
                        unset($data["trackbacks"][$tbid]);

                        //remove the trackback from last_trackbacks if it's in there..
                        if (($_REQUEST["submit"] == "Remove Spam") && (count($last_tracks)>0)) {
                            foreach ($last_tracks as $lt_key => $last_track) {
                                if ( ($last_track['code'] == $data['code']) &&
                                ($last_track['name'] == $tb['name']) &&
                                ($last_track['date'] == $tb['date'])){
                                    unset($last_tracks[$lt_key]);
                                }
                            }
                        }

                    }
                }
            }

            if (($key == "comments") &&  (count($data["comments"])>0) && $comments) {
                foreach ($data["comments"] as $comid => $com) {
                    $text = implode(" ", $com);

                    if (strpos(strtolower($text),strtolower($_REQUEST["spamword"])) !== false) {


                        $output .= sprintf("<tr class='%s'><td valign='top'>%s</td><td valign='top'>%s</td>
                        			<td valign='top'>%s</td>",
                        		(($tot_tb_spam+$tot_com_spam) % 2) ? "tabular_line_even" : "tabular_line_odd",
                        		sprintf($entry_url,$entry_id,$entry_id),
                        		sprintf($com_url,$entry_id,$comid,"Comment&nbsp;".$comid),
                        		wordwrap($text, 90, " <br />", true)
                        	);

                        $tot_com_spam ++;
                        unset($data["comments"][$comid]);

                        //remove the comment from last_comments if it's in there..
                        if (($_REQUEST["submit"] == "Remove Spam") && (count($last_comms)>0)) {
                            foreach ($last_comms as $lc_key => $last_comm) {
                                if ( ($last_comm['code'] == $data['code']) &&
                                ($last_comm['name'] == $com['name']) &&
                                ($last_comm['date'] == $com['date'])){
                                    unset($last_comms[$lc_key]);
                                }
                            }
                        }

                    }
                }
            }

        }

        if ($_REQUEST["submit"] == "Remove Spam") {
            $spam_db->set_entry($data);
            $spam_db->save_entry();
        }
    }


    if ($_REQUEST["submit"] == "Remove Spam") {

    	echo "<br />";

        if ($trackbacks) {
            save_serialize("./db/ser_lasttrack.php", $last_tracks);
            echo "<p>Removed $tot_tb_spam Spam Trackbacks</p>\n";
        }

        if ($comments) {
            save_serialize("./db/ser_lastcomm.php", $last_comms);
            echo "<p>Removed $tot_com_spam Spam Comments</p>\n";
        }


        $link=sprintf("index.php?session=%s&amp;menu=admin&amp;func=admin&amp;do=spamwasher", $Pivot_Vars['session']);

        echo "<br /><p><b>Done!</b></p>";

        echo '<p>To remove the spam from the generated pages as well, you should:
        <a href="index.php?menu=admin&amp;func=admin&amp;do=build_index">Rebuild the Index</a> and then
        <a href="index.php?menu=admin&amp;func=admin&amp;do=regen">Rebuild All Files</a></em>.<br />
        Or go back to the <a href="'.$link.'">Spam Washer page</a> to remove more spam before
        rebuilding.</p>';

    } elseif ($_REQUEST["submit"] == "List Spam") {

    	echo "<br />";

        if ($trackbacks) {
            echo "<p>Found $tot_tb_spam Spam Trackbacks</p>\n";
        }
        if ($comments) {
            echo "<p>Found $tot_com_spam Spam Comments</p>\n";
        }
        if ($tot_com_spam > 0 || $tot_tb_spam > 0) {

        	echo '<br />
        		<h3>Complete Spam Listing for "'.$_REQUEST["spamword"].'"</h3>
        		<table class="tabular_border" cellspacing="0" cellpadding="2">
        		<tr class="tabular_header"><th>Entry</th><th>Type</th><th>Text</th></tr>'.$output."</table>\n";

        }

    }
}

?>
