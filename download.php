<?php
/**
 * Created by IntelliJ IDEA.
 * User: wkarim
 * Date: 13/04/2018
 * Time: 10:32 AM
 */
include ('lib/simplehtmldom_1_5/simple_html_dom.php');


if(isset($_POST['url']) && $_POST['url'] !== "") :
    $url = $_POST['url'];
    $dom = file_get_html($url);
    $jsonArray = array();
    $image_url = "";
    $ios_insta_url = "";
    $title = "";
    $video_url = "";
    $og_url = "";

    foreach($dom->find('meta[property]') as $meta){
        if($meta->property == "og:image") {
            $image_url = $meta->content;
        }
        if($meta->property == "og:video") {
                $video_url = $meta->content;
        }
        if($meta->property == "al:ios:url"){
            $ios_insta_url = $meta->content;
        }
        if($meta->property == "og:title"){
            $title = $meta->content;
        }
        
        if($meta->property == "og:url"){
            $og_url = $meta->content;
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

<?php 
        if($video_url != "") :
?>
    <video controls autoplay>
      <source src="<?php echo $video_url; ?>" type="video/mp4">  
      Your browser does not support HTML5 video.
    </video>
    <p><a href="<?php echo $og_url; ?>"><?php echo $og_url; ?></a></p>
    <?php else : ?>
     <img src="<?php echo $image_url; ?>" />
    <?php endif; ?>
</div>

</body>
</html>
