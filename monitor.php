<?php

    $providence_login_url = "https://gadagne.ideesculture.fr/gestion/";
    $monitoring_disk = "/dev/md2";

    function get_server_memory_usage(){

        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = $mem[2]/$mem[1]*100;

        return $memory_usage;
    }
    function get_server_cpu_usage(){

        $load = sys_getloadavg();
        return $load[0];

    }
    function is_providence_login_ok($url) {
        //gets the site
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch); 

        //parse the data
        preg_match('/loginFormElement/', $response, $matches);
        //prints the parsed data
        if($matches[0] == "loginFormElement") {
            return true;
        } else {
            return false;
        }
    }
    
    function disk_space($monitoring_disk) {
        //gets the site
        $result = exec("df | grep ".$monitoring_disk);
        $result = str_replace("  ", " ", $result);
        $result = str_replace("  ", " ", $result);
        $result = str_replace("  ", " ", $result);
        $infos = explode(" ", $result);
        return ["disk_size"=>$infos[1], "disk_used"=>$infos[2], "disk_available"=>$infos[3], "percentage"=>$infos[4]];
    }

    $result = [
        "free_ram_percentage"=>get_server_memory_usage(),
        "load"=>get_server_cpu_usage(),
        "is_providence_ok"=>is_providence_login_ok($providence_login_url."index.php/system/auth/login"),
        "disk"=>disk_space($monitoring_disk)
    ];


    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');
    print json_encode($result, JSON_PRETTY_PRINT);
