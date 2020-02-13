<?php
    
    function get_data($username, $password, $account_number){
        $url = "http://web-app-wallet-th.000webhostapp.com/index.php?username=$username&password=$password&account=$account_number";
        $data = curl_init($url);
        curl_setopt($data, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($data, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; th; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12");
        curl_setopt($data, CURLOPT_HEADER, 0);
        curl_setopt($data, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1); 
        $doc = curl_exec($data);
        return json_decode($doc, true);
        curl_close($data);

    }