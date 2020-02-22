<?php
	include_once("config.php");

	if(MODULE_SERVERS_V2 == "ON"){
	//GET JSON STATUS FOR SERVER #1
	$json_url = "https://rust-servers.net/api/?object=servers&element=detail&key=".SERVER_1_KEY."";
	$json_string = file_get_contents($json_url);
	$parsed_json = json_decode($json_string,true);
		$s1_name	= $parsed_json['name'];
		if($s1_name == ""){$s1_name = "Server Offline";};//Offline server name fix
		$s1_status	= $parsed_json['is_online'];
			if($s1_status == "1"){$s1_status = "Online";
			$s1_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a> ";
			$s1_connect_button = "<button data-toggle='modal' data-target='#ServerConnect1' type='button' class='btn btn-outline-success btn-lg'><i class='fab fa-steam-symbol'></i> Connect</button>";
		}
            else{$s1_status = "Offline";
            $s1_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a>&nbsp;";
            $s1_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
        };
		$s1_cur		= $parsed_json['players'];
		if($s1_cur == ""){$s1_cur = "0";};//Offline server players fix
		$s1_max		= $parsed_json['maxplayers'];
		if($s1_max == ""){$s1_max = "0";};//Offline server players fix
		$s1_url		= $parsed_json['url'];
		if(MODULE_SERVERS_V2 == "ON"){$s1_img = "img/serverlogo.webp";};//Remove PHP Notice in logs
		if(MODULE_SERVERS_V2 == "OFF"){
		$s1_img		= $parsed_json['image'];
		if ($s1_img == "") {$s1_img = "img/serverlogo.webp";};//Empty path fix
		if (getimagesize($s1_img) == false) {$s1_img = "img/serverlogo.webp";};
		};
		$s1_ip		= $parsed_json['address'];
		$s1_port	= $parsed_json['port'];
	//GET JSON STATUS FOR SERVER #2
        $json_url = "https://rust-servers.net/api/?object=servers&element=detail&key=".SERVER_2_KEY."";
        $json_string = file_get_contents($json_url);
        $parsed_json = json_decode($json_string,true);
		$s2_name        = $parsed_json['name'];
		if($s2_name == ""){$s2_name = "Server Offline";};//Offline server name fix
        $s2_status      = $parsed_json['is_online'];
            if($s2_status == "1"){$s2_status = "Online";
            $s2_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a>&nbsp;";
            $s2_connect_button = "<button data-toggle='modal' data-target='#ServerConnect2' type='button' class='btn btn-outline-success btn-lg'><i class='fab fa-steam-symbol'></i> Connect</button>";
        }
			else{$s2_status = "Offline";
			$s2_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a> ";
			$s2_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
		};
        $s2_cur         = $parsed_json['players'];
        if($s2_cur == ""){$s2_cur = "0";};//Offline server players fix
        $s2_max         = $parsed_json['maxplayers'];
        if($s2_max == ""){$s2_max = "0";};//Offline server players fix
        $s2_url		= $parsed_json['url'];
        if(MODULE_SERVERS_V2 == "ON"){$s2_img = "img/serverlogo.webp";};//Remove PHP Notice in logs
        if(MODULE_SERVERS_V2 == "OFF"){
        $s2_img         = $parsed_json['image'];
		if ($s2_img == "") {$s2_img = "img/serverlogo.webp";};//Empty path fix
		if (getimagesize($s2_img) == false) {$s2_img = "img/serverlogo.webp";};
		};
        $s2_ip          = $parsed_json['address'];
        $s2_port        = $parsed_json['port'];
	//EXTRA SERVERS START

	//EXTRA SERVERS END
	};

	if(MODULE_SERVERS == "ON"){
	//GET JSON STATUS FOR SERVER #1
	$json_url = "https://api.rust-servers.info/info/".SRV_ID_1."";
	$json_string = file_get_contents($json_url);
	$parsed_json = json_decode($json_string,true);
		$s1_name	= $parsed_json['hostname'];
		$s1_status	= $parsed_json['online_state'];
			if($s1_status == "1"){$s1_status = "Online";$s1_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a> ";}
                        else{$s1_status = "Offline";$s1_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a> ";};
		$s1_cur		= $parsed_json['players_cur'];
		$s1_max		= $parsed_json['players_max'];
		$s1_img		= $parsed_json['image'];
		if ($s1_img == "") {$s1_img = "img/serverlogo.webp";};//Empty path fix
		if (getimagesize($s1_img) == false) {$s1_img = "img/serverlogo.webp";};
		$s1_ip		= $parsed_json['ip'];
		$s1_port	= $parsed_json['port'];
	//GET JSON STATUS FOR SERVER #2
        $json_url = "https://api.rust-servers.info/info/".SRV_ID_2."";
        $json_string = file_get_contents($json_url);
        $parsed_json = json_decode($json_string,true);
		$s2_name        = $parsed_json['hostname'];
                $s2_status      = $parsed_json['online_state'];
                        if($s2_status == "1"){$s2_status = "Online";$s2_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a>";}
			else{$s2_status = "Offline";$s2_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a> ";};
                $s2_cur         = $parsed_json['players_cur'];
                $s2_max         = $parsed_json['players_max'];
                $s2_img         = $parsed_json['image'];
		if ($s2_img == "") {$s2_img = "img/serverlogo.webp";};//Empty path fix
		if (getimagesize($s2_img) == false) {$s2_img = "img/serverlogo.webp";};
                $s2_ip          = $parsed_json['ip'];
                $s2_port        = $parsed_json['port'];
	//EXTRA SERVERS START

	//EXTRA SERVERS END
	};

	if(MODULE_COMMUNITY == "ON"){
	//STEAM GROUP
	$url = "http://steamcommunity.com/gid/".STEAM_GID."/memberslistxml/";
	$xml = simplexml_load_file($url);
	$memberscount	= $xml->memberCount;
	$membersingame	= $xml->groupDetails->membersInGame;
	$membersonline	= $xml->groupDetails->membersOnline;
	};
	if(MODULE_DISCORD == "ON"){
	//DISCORD SERVER
	$json_url = "https://discordapp.com/api/guilds/".DISCORD_SERVER_ID."/widget.json";
	$json_string = file_get_contents($json_url);
	$parsed_json = json_decode($json_string,true);
		$discord_name		= $parsed_json['name'];
		$discord_members	= $parsed_json['members'];
	};
?>
