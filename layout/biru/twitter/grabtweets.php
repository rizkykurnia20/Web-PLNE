<? require_once ('codebird2/codebird.php'); 
$CONSUMER_KEY = 'sFwyIZVldWfprapTLYpYbcQEu';     
$CONSUMER_SECRET = 'gXFEXZtaOkRrk9WXrWvIakdhmDxSUfNyyF4o2MDHv3cHStPFQR';     
$ACCESS_TOKEN = '3810122232-r7Sy3p6PLcndUjXseVrUAWWRMrZGNo0NA2hT7yf';     
$ACCESS_TOKEN_SECRET = 'qMkxzipKy50jtdWUZDDHgKnxBovs9C8XtDhcS3izAJhm0';       
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);     
$cb = Codebird::getInstance();     
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);
//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];
//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
'screen_name' => $q,
'q' => $q,
'count' => $count
);
//Make the REST call
$data = (array) $cb->$api($params);
//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);
?>