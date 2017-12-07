<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '652e2cf55160d05a9ebe460c5d34bc8d';
$access_token  = '15H2tOTZ54XYywtEe29jw/liFLfRzrVzNHCCfbXLSc+QKtp6Kfk1b8WIUiFLDXDRRzyZhTPCgqb37gGUDmkKpubitG0t9DWjxNJACLPtcynKZL+ZEK9E+FnuEc+owuS+gcB215oqHv2UkngBiOsbcwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
