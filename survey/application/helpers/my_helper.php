<?php
	/**
     * This function is used to return js version
     * @return String
     */
	function jsversionstring(){ 
      	$jsversionstring = "25-Jul-2019 11:37:00 ";

      	return $jsversionstring;
  	}

  	/**
     * This function is used to generate a random string
     * @return String
     */
    function randomString(){
        $alpha = "abcdefghijklmnopqrstuvwxyz";
        $alpha_upper = strtoupper($alpha);
        $numeric = "0123456789";
        $chars = $alpha . $alpha_upper . $numeric;               
        $chars = str_shuffle($chars);
        $pw = substr($chars, 8,8);
        return $pw;
    }
?>