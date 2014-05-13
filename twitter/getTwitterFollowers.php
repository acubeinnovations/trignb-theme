<?php


function getTwitterFollowers($screenName = 'codeforest')
{
    require_once('Cache.php');
    require_once('TwitterAPIExchange.php');
    // this variables can be obtained in http://dev.twitter.com/apps
    // to create the app, follow former tutorial on http://www.codeforest.net/get-twitter-follower-count
    $settings = array(
         'oauth_access_token' => "288685334-8AqSGVdxdsgi2o7jSyVjM7EwCWBHsUktgS2hsGxR",
		'oauth_access_token_secret' => "FpmEXUiUX0NFA52ORa5Q3flPnoVnnPzxRH3ybz1plWOwv",
		'consumer_key' => "lLOv1O330jE3roHi3YKpkxksA",
		'consumer_secret' => "gKvQl91ZuUADwiXNpIXyWkW7AQraEn9Davyz9ltdNZMPNchwvM"
    );
 
    $cache = new Cache();
  
    // get follower count from cache
    $numberOfFollowers = $cache->read($screenName.'.cache');
    // cache version does not exist or expired
    if (false === $numberOfFollowers) {
        // forming data for request
        $apiUrl = "https://api.twitter.com/1.1/users/show.json";
        $requestMethod = 'GET';
        $getField = '?screen_name=' . $screenName;
 
        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getField)
             ->buildOauth($apiUrl, $requestMethod)
             ->performRequest();
 
        $followers = json_decode($response);
        $numberOfFollowers = $followers->followers_count;
  
        // cache for an hour
        $cache->write($screenName.'.cache', $numberOfFollowers, 1*60*60);
    }
  
    return $numberOfFollowers;
}


?>
