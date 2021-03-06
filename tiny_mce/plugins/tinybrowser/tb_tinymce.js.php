<?php
require_once("config_tinybrowser.php");

$tbpath = pathinfo($_SERVER['SCRIPT_NAME']);
$tbmain = $tbpath['dirname'].'/tinybrowser.php';
?>
function tinyBrowser (field_name, url, type, win)
{
    var cmsURL = "<?php echo $tbmain; ?>";   
    if (cmsURL.indexOf("?") < 0) {
        //add the type as the only query parameter
        cmsURL = cmsURL + "?type=" + type;
        
}
    
    else {
        //add the type as an additional query parameter
        // (PHP session ID is now included if there is one at all)
        cmsURL = cmsURL + "&type=" + type;
    }

    tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Tiny Browser',
        width : <?php echo $tinybrowser['window']['width']; ?>, 
        height : <?php echo $tinybrowser['window']['height']; ?>,
        resizable : "yes",
		  scrollbars : "yes",
        inline : "yes",  // This parameter only has an effect if you use the inlinepopups plugin!
        close_previous : "no"
    }, {
        window : win,
        input : field_name
    });
    return false;
  }