<?php
    include_once("config.php");

    # Callback function for saving cache
    function write_cache($content){
        $cache_path = dirname(__FILE__).'/cache/cached.html';

        @mkdir(dirname($cache_path), 0755); # Make sure cache folder exists
        file_put_contents($cache_path, $content); # Save cache

        return $content;
    }

    if(defined("CACHE_LIFETIME") && intval(CACHE_LIFETIME) > 0){
        # Caching is enabled
        $cache_path = dirname(__FILE__).'/cache/cached.html';

        # Read or write cache
        if(
            file_exists($cache_path) # Check cache file exists
            && filemtime($cache_path) + intval(CACHE_LIFETIME) > time() # Check cache file is not expired
            && filemtime($cache_path) > filemtime(dirname(__FILE__).'/config.php') # Check cache file is newer than any config modifications
        ){
            # Cache hit, try reading from cache
            @$cache = file_get_contents($cache_path);

            if($cache !== false){
                # Cache read was succesful, print cached content and exit
                echo $cache;
                exit;
            }
        }else{
            # Cache miss, start output buffering and write to cache
            ob_start('write_cache');
        }
    }
?>