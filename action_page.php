<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://js.appboycdn.com/web-sdk/1.6/appboy.min.css" />
    <script type="text/javascript">
      +function(a,p,P,b,y) {
        appboy={};for(var s="destroy toggleAppboyLogging setLogger openSession changeUser requestImmediateDataFlush requestFeedRefresh subscribeToFeedUpdates logCardImpressions logCardClick logFeedDisplayed requestInAppMessageRefresh logInAppMessageImpression logInAppMessageClick logInAppMessageButtonClick logInAppMessageHtmlClick subscribeToNewInAppMessages removeSubscription removeAllSubscriptions logCustomEvent logPurchase isPushSupported isPushBlocked isPushGranted isPushPermissionGranted registerAppboyPushMessages unregisterAppboyPushMessages submitFeedback ab ab.User ab.User.Genders ab.User.NotificationSubscriptionTypes ab.User.prototype.getUserId ab.User.prototype.setFirstName ab.User.prototype.setLastName ab.User.prototype.setEmail ab.User.prototype.setGender ab.User.prototype.setDateOfBirth ab.User.prototype.setCountry ab.User.prototype.setHomeCity ab.User.prototype.setEmailNotificationSubscriptionType ab.User.prototype.setPushNotificationSubscriptionType ab.User.prototype.setPhoneNumber ab.User.prototype.setAvatarImageUrl ab.User.prototype.setLastKnownLocation ab.User.prototype.setUserAttribute ab.User.prototype.setCustomUserAttribute ab.User.prototype.addToCustomAttributeArray ab.User.prototype.removeFromCustomAttributeArray ab.User.prototype.incrementCustomUserAttribute ab.InAppMessage ab.InAppMessage.SlideFrom ab.InAppMessage.ClickAction ab.InAppMessage.DismissType ab.InAppMessage.OpenTarget ab.InAppMessage.ImageStyle ab.InAppMessage.Orientation ab.InAppMessage.CropType ab.InAppMessage.prototype.subscribeToClickedEvent ab.InAppMessage.prototype.subscribeToDismissedEvent ab.InAppMessage.prototype.removeSubscription ab.InAppMessage.prototype.removeAllSubscriptions ab.InAppMessage.Button ab.InAppMessage.Button.prototype.subscribeToClickedEvent ab.InAppMessage.Button.prototype.removeSubscription ab.InAppMessage.Button.prototype.removeAllSubscriptions ab.SlideUpMessage ab.ModalMessage ab.FullScreenMessage ab.HtmlMessage ab.ControlMessage ab.Feed ab.Feed.prototype.getUnreadCardCount ab.Card ab.ClassicCard ab.CaptionedImage ab.Banner ab.WindowUtils display display.automaticallyShowNewInAppMessages display.showInAppMessage display.showFeed display.destroyFeed display.toggleFeed sharedLib".split(" "),i=0;i<s.length;i++){for(var k=appboy,l=s[i].split("."),j=0;j<l.length-1;j++)k=k[l[j]];k[l[j]]=function(){console&&console.error("The Appboy SDK has not yet been loaded.")}}appboy.initialize=function(){console&&console.error("Appboy cannot be loaded - this is usually due to strict corporate firewalls or ad blockers.")};appboy.getUser=function(){return new appboy.ab.User};appboy.getCachedFeed=function(){return new appboy.ab.Feed};
        (y = a.createElement(p)).type = 'text/javascript';
        y.src = 'https://js.appboycdn.com/web-sdk/1.6/appboy.min.js';
        (c = a.getElementsByTagName(p)[0]).parentNode.insertBefore(y, c);
        if (y.addEventListener) {
          y.addEventListener("load", b, false);
        } else if (y.readyState) {
          y.onreadystatechange = b;
        }
      }(document, 'script', 'link', function() {
        appboy.initialize('428f8ecb-07bc-457f-979d-5ce1bada5fe3');
        appboy.toggleAppboyLogging();
        appboy.registerAppboyPushMessages();
        //appboy.display.automaticallyShowNewInAppMessages();
        appboy.isPushSupported();
        appboy.openSession();
        appboy.display.showFeed();
      });
    </script>
  </head>
<body>
<h1>You Posted!</h1>

<?php

$usr_key = $_GET["usr_key"];
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$email = $_GET["email"];
$dob = $_GET["dob"];
$country = $_GET["country"];
$language = $_GET["language"];
$home_city = $_GET["home_city"];
$bio = $_GET["bio"];
$gender = $_GET["gender"];
$phone = $_GET["phone"];
$email_subscribe = $_GET["email_subscribe"];
$push_subscribe = $_GET["push_subscribe"];
$image_url = $_GET["image_url"];
$gonow_subscriber = $_GET["gonow_subscriber"];

//$appboyObj = "[\"external_id\"=>\"".$usr_key."\",\"first_name\"=> \"".$first_name."\",\"last_name\"=> \"".$last_name."\",\"email\"=> \"".$email."\",\"dob\"=> \"".$dob."\",\"country\"=> \"".$country."\",\"language\"=> \"".$language."\",\"home_city\"=> \"".$home_city."\",\"bio\"=> \"".$bio."\",\"gender\"=> \"".$gender."\",\"phone\"=> \"".$phone."\",\"email_subscribe\"=> \"".$email_subscribe."\",\"push_subscribe\"=> \"".$push_subscribe."\",\"image_url\"=> \"".$image_url."\",\"gonow_subscriber\"=> \"".$gonow_subscriber."\"]";

//echo $appboyObj;
//$serialized = serialize($appboyObj);
//$abNewArray = unserialize($serialized);
//print_r($abNewArray);

//echo $abNewArray[0]['email']; 

//var_dump($appboyObj);

//echo $usr_key."|";
//echo $first_name."|";
//echo $last_name."|";
//echo $email."|";
//echo $dob."|";
//echo $country."|";
//echo $language."|";
//echo $home_city."|";
//echo $bio."|";
//echo $gender."|";
//echo $phone."|";
//echo $email_subscribe."|";
//echo $push_subscribe."|";
//echo $image_url."|";
//echo $gonow_subscriber;




# Define your static variables (app group ID, request url)
$app_group_id = '428f8ecb-07bc-457f-979d-5ce1bada5fe3';
$request_url = 'https://api.appboy.com/users/track';

// Initialize your users by creating a map containing
// your desired attributes and associated attribute values.


$user1 = array(
      'setExternalId'=> $usr_key,
      'setFirstName'=> $first_name,
      'setLastName'=> $last_name,
      'setEmail'=> $email,
      'setDateOfBirth'=> $dob,
      'setCountry'=> $country,
      'setLanguage'=> $language,
      'setHomeCity'=> $home_city,
      'setGender'=> $gender,
      'setPhoneNumber'=> $phone,
      'setEmailNotificationSubscriptionType'=> $email_subscribe,
      'setPushNotificationSubscriptionType'=> $push_subscribe,
      'setAvatarImageUrl'=> $image_url
       );


// Note: Arrays in php are really ordered maps, hence
// the 'array' initialization associated with each user.

// Instantiate your attributes array using your previously
// defined user maps.
$attributes = array($user1);

// Organize the data to send to the API as another map
// comprised of your previously defined variables.
$postData = array(
  'app_group_id' => $app_group_id,
    'attributes' => $attributes
);

//print_r($postData);

//$arrlength=count($serialized);

//for($x=0;$x<$arrlength;$x++)
//  {
//  echo $serialized[$x];
//  echo "<br>";
//  }


// Create the context for the request
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($postData)
    )
));
echo json_encode($postData);
echo "<br><br>";
//print_r(array(
  //  'http' => array(
    //    'method' => 'POST',
      //  'header' => "Content-Type: application/json\r\n",
        //'content' => json_encode($postData)
//    )
//));
echo "<br><br>";
//print_r($context);
// Send the request
$response = file_get_contents($request_url, FALSE, $context);

// Post the response to ensure a successful request
echo $response;
echo "<br><br>";
print_r("I reponded with: ".$response.".. HELLO!");
?>

</body>
</html>