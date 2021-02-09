<?php
//sidrach's code
//Replace 'serverName' with your server name.

function mc_face() {
	//Get the status and decode the JSON
	$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/serverName'));

	$icon = "https://minotar.net/helm/";

	//Show the version
	//echo $status->version;

	//Show a list of players
	foreach ($status->players->list as $player) {
		echo '<img src="'.$icon.$player.'/30">'." ";
	}

}

mc_face();
?>
