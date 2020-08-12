<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
        foreach($list as $channel):
            $key = "AIzaSyBma6_DcPsn0RZB23lOZkd5knmAC0_tLqE";
            $base_url = "https://www.googleapis.com/youtube/v3/";
            $maxResult = 5;

            $API_URL = $base_url. "search?order=date&part=snippet&channelId=".$channel->id_channel."&maxResult=".
        $maxResult."&key=".$key;

            echo $API_URL;
            $video = json_decode(file_get_contents($API_URL));
            //$video1 = json_decode(file_get_contents($APA_URL));
            echo "<pre>";
            print_r($video);
        endforeach;

    ?>
</body>
</html>