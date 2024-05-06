<?php
	include_once 'config.php';

	if(MODULE_SERVERS == "ON"){
	//GET JSON STATUS FOR SERVER #1
	$json_url = "https://rust-servers.net/api/?object=servers&element=detail&key=".SERVER_1_KEY."";
	$json_string = file_get_contents($json_url);
	$parsed_json = json_decode($json_string,true);
	if(empty($parsed_json)){
		$s1_name = "Server Offline";
		$s1_status = "Offline";
		$s1_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a>&nbsp;";
        $s1_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
        $s1_vote_button = "<a target='_blank' href='#' class='btn btn-outline-light btn-lg disabled'><i class='fas fa-vote-yea'></i> Vote</a>";
        $s1_cur = "0"; $s1_max = "0";
        $s1_img = "img/serverlogo_1024.webp";
    }else{
		$s1_name	= $parsed_json['name'];
		$s1_url		= $parsed_json['url'];
		if($s1_name == "" OR empty($s1_name)){$s1_name = "Server Offline";};
		$s1_status	= $parsed_json['is_online'];
			if($s1_status == "1"){$s1_status = "Online";
			$s1_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a> ";
			$s1_connect_button = "<button data-bs-toggle='modal' data-bs-target='#ServerConnect1' type='button' class='btn btn-outline-success btn-lg'><i class='fab fa-steam-symbol'></i> Connect</button>";
			$s1_vote_button = "<a target='_blank' href='".$s1_url."vote/' class='btn btn-outline-light btn-lg'><i class='fas fa-vote-yea'></i> Vote</a>";
		}
            else{$s1_status = "Offline";
            $s1_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a>&nbsp;";
            $s1_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
            $s1_vote_button = "<a target='_blank' href='".$s1_url."vote/' class='btn btn-outline-light btn-lg disabled'><i class='fas fa-vote-yea'></i> Vote</a>";
        };
		$s1_cur		= $parsed_json['players'];
		if($s1_cur == "" OR empty($s1_cur)){$s1_cur = "0";};
		$s1_max		= $parsed_json['maxplayers'];
		if($s1_max == "" OR empty($s1_max)){$s1_max = "0";};
		$s1_img = "img/serverlogo_1024.webp";//Remove PHP Notice in logs
		$s1_ip		= $parsed_json['address'];
		$s1_port	= $parsed_json['port'];
	};
	//GET JSON STATUS FOR SERVER #2
        $json_url = "https://rust-servers.net/api/?object=servers&element=detail&key=".SERVER_2_KEY."";
        $json_string = file_get_contents($json_url);
        $parsed_json = json_decode($json_string,true);
        if(empty($parsed_json)){
			$s2_name = "Server Offline";
			$s2_status = "Offline";
			$s2_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a>&nbsp;";
        	$s2_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
        	$s2_vote_button = "<a target='_blank' href='#' class='btn btn-outline-light btn-lg disabled'><i class='fas fa-vote-yea'></i> Vote</a>";
        	$s2_cur = "0"; $s2_max = "0";
        	$s2_img = "img/serverlogo_1024.webp";
    	}else{
		$s2_name        = $parsed_json['name'];
		$s2_url		= $parsed_json['url'];
		if($s2_name == "" OR empty($s2_name)){$s2_name = "Server Offline";};
        $s2_status      = $parsed_json['is_online'];
            if($s2_status == "1"){$s2_status = "Online";
            $s2_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a>&nbsp;";
            $s2_connect_button = "<button data-bs-toggle='modal' data-bs-target='#ServerConnect2' type='button' class='btn btn-outline-success btn-lg'><i class='fab fa-steam-symbol'></i> Connect</button>";
            $s2_vote_button = "<a target='_blank' href='".$s2_url."vote/' class='btn btn-outline-light btn-lg'><i class='fas fa-vote-yea'></i> Vote</a>";
        }
			else{$s2_status = "Offline";
			$s2_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a> ";
			$s2_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
			$s2_vote_button = "<a target='_blank' href='".$s2_url."vote/' class='btn btn-outline-light btn-lg disabled'><i class='fas fa-vote-yea'></i> Vote</a>";
		};
        $s2_cur         = $parsed_json['players'];
        if($s2_cur == "" OR empty($s2_cur)){$s2_cur = "0";};
        $s2_max         = $parsed_json['maxplayers'];
        if($s2_max == "" OR empty($s2_max)){$s2_max = "0";};
        $s2_img = "img/serverlogo_1024.webp";//Remove PHP Notice in logs
        $s2_ip          = $parsed_json['address'];
        $s2_port        = $parsed_json['port'];
    };
	//EXTRA SERVERS START

	//EXTRA SERVERS END
	};
	if(MODULE_COMMUNITY == "ON"){
	//STEAM GROUP
	$url = "http://steamcommunity.com/gid/".STEAM_GID."/memberslistxml/";
	$xml = simplexml_load_file($url);
	$memberscount	= (int) $xml->memberCount;
	$memberscount = number_format( $memberscount );
	$membersingame	= (int) $xml->groupDetails->membersInGame;
	$membersingame = number_format( $membersingame );
	$membersonline	= (int) $xml->groupDetails->membersOnline;
	$membersonline = number_format( $membersonline );
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
