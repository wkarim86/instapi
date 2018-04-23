<?php
/**
 * Created by IntelliJ IDEA.
 * User: wkarim
 * Date: 13/04/2018
 * Time: 10:32 AM
 */
include ('lib/simplehtmldom_1_5/simple_html_dom.php');


if(isset($_GET['url']) && $_GET['url'] !== "") :
    $url = $_GET['url'];
    $dom = file_get_html($url);
    $jsonArray = array();
    $image_url = "";
    $ios_insta_url = "";
    $title = "";

    foreach($dom->find('meta[property]') as $meta){
        if($meta->property == "og:image") {
            $image_url = $meta->content;
        }
        if($meta->property == "al:ios:url"){
            $ios_insta_url = $meta->content;
        }
        if($meta->property == "og:title"){
            $title = $meta->content;
        }

        //echo '<p>'. $meta->property . ' : ' . $meta->content .'</p>';
    }



endif;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>InstaPhoto Download</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div>
    <img src="<?php echo $image_url; ?>" />
</div>

</body>
</html>