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

    array_push($jsonArray, array("image" => $image_url, "ios_url" => $ios_insta_url, "title" => $title));

    http_response_code(200);
    // set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // treat this as json
    header('Content-Type: application/json');

    echo json_encode($jsonArray);

//    $metas = $dom->find('meta[property="og:image"]');
//    foreach($metas as $meta) {
//        echo  '<img src="' . $meta->content . '" />';
//    }
endif;
?>