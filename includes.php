<?php
	include_once("config.php");

	if(MODULE_SERVERS == "ON"){
	//GET JSON STATUS FOR SERVER #1
	$json_url = "https://api.rust-servers.info/info/".SRV_ID_1."";
	$json_string = file_get_contents($json_url);
	$parsed_json = json_decode($json_string,true);
		$s1_name	= $parsed_json['hostname'];
		$s1_status	= $parsed_json['online_state'];
			if($s1_status == "1"){$s1_status = "Online";}else{$s1_status = "Offline";$s1_disabled = " disabled";};
		$s1_cur		= $parsed_json['players_cur'];
		$s1_max		= $parsed_json['players_max'];
		$s1_img		= $parsed_json['image'];
		if (getimagesize($s1_img) == false) {$s1_img = "http://files.facepunch.com/garry/2015/August/27/serverlogo.png";};
		$s1_ip		= $parsed_json['ip'];
		$s1_port	= $parsed_json['port'];
	//GET JSON STATUS FOR SERVER #2
        $json_url = "https://api.rust-servers.info/info/".SRV_ID_2."";
        $json_string = file_get_contents($json_url);
        $parsed_json = json_decode($json_string,true);
		$s2_name        = $parsed_json['hostname'];
                $s2_status      = $parsed_json['online_state'];
                        if($s2_status == "1"){$s2_status = "Online";}else{$s2_status = "Offline";$s2_disabled = " disabled";};
                $s2_cur         = $parsed_json['players_cur'];
                $s2_max         = $parsed_json['players_max'];
                $s2_img         = $parsed_json['image'];
		if (getimagesize($s2_img) == false) {$s2_img = "http://files.facepunch.com/garry/2015/August/27/serverlogo.png";};
                $s2_ip          = $parsed_json['ip'];
                $s2_port        = $parsed_json['port'];
	};

	if(MODULE_COMMUNITY == "ON"){
	//STEAM GROUP
	$url = "http://steamcommunity.com/gid/".STEAM_GID."/memberslistxml/";
	$xml = simplexml_load_file($url);
	$memberscount	= $xml->memberCount;
	$membersingame	= $xml->groupDetails->membersInGame;
	$membersonline	= $xml->groupDetails->membersOnline;
	};
?>
