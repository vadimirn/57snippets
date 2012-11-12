<?
/**
 * Сниппеты для запросов к Facebook API
 *
 */


/**
 * Отправка apprequest из приложения
 *
 */
$app_id 			= YOUR_APP_ID;
$app_secret 		= YOUR_APP_SECRET;

$token_url 			= "https://graph.facebook.com/oauth/access_token?" .
	"client_id=" . $app_id .
	"&client_secret=" . $app_secret .
	"&grant_type=client_credentials";

$app_access_token 	= file_get_contents($token_url);

$user_id 			= THE_CURRENT_USER_ID;

$apprequest_url 	="https://graph.facebook.com/" .
	$user_id .
	"/apprequests?message='INSERT_UT8_STRING_MSG'" . 
	"&data='INSERT_STRING_DATA'&"  .   
	$app_access_token . "&method=post";

$result 			= file_get_contents($apprequest_url);
echo("App Request sent?: ". $result);


/**
 * Получение токена для API
 */
function getToken() {
    $APPLICATION_ID 		= "xxxx";
    $APPLICATION_SECRET 	= "xxxx";

    $token_url = "https://graph.facebook.com/oauth/access_token?" .
        "client_id=" . $APPLICATION_ID .
        "&client_secret=" . $APPLICATION_SECRET .
        "&grant_type=client_credentials";

    $accessToken = explode('=', file_get_contents($token_url));
    return $accessToken[1];
}


/**
 * Отправка notification в приложение.
 * Только для iframe приложений
 *
 */
function sendNotifications($fb_id, $token, $msg, $href = '') {
	$attachment = array(
		'access_token' 	=> $token,
		'href' 			=> $hrf,
		'template'		=> $msg
	);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $fb_id . '/notifications');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $attachment);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); //to suppress the curl output
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
