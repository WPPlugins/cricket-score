<?php
/*
Plugin Name: Cricket Score
Plugin URI: http://toys.ocricket.com/cricket-score/
Description: Get the latest Cricket Live Score for your website.
Version: 1.0.0
Author: Brajeshwar
Author URI: http://brajeshwar.com/
*/

define('oCricket_score_source', '<script type="text/javascript">eval("document.write(\'<div id=\"oc-wdg-score\"><p><span id=\"oc-wdg-score-show\"><\/span><br /><small>More at <a href=\"http:\/\/ocricket.com\/\" title=\"oCricket.com\">oCricket.com<\/a><\/small><\/p><\/div><script type=\"text\/javascript\">o={s:function(data){document.getElementById(\"oc-wdg-score-show\").innerHTML=data.match + \"<br \/>\" + data.score + \"<br \/>\" + data.summary;}};<\/script><script type=\"text\/javascript\" src=\"http:\/\/json-cricket.appspot.com\/score.json?callback=o.s\"><\/script>\');\n");</script>');

// Custom non-widget Display
function oCricket_score_show () {
	// print
	echo oCricket_score_source;
	}

function widget_oCricket_score_register() {
	function widget_oCricket_score($args) {
    	extract($args);
		?>
		<?php echo $before_widget; ?>
		<?php echo $before_title
		. 'Cricket Score'
		. $after_title; ?>
		<?php echo oCricket_score_source; ?>
		<?php echo $after_widget; ?>
		<?php
	}
	register_sidebar_widget('Cricket Score', 'widget_oCricket_score');
}
add_action('init', widget_oCricket_score_register);

?>