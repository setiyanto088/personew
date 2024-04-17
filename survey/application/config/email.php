<?php
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://mail.swamediaproject.live'; //change this
    $config['smtp_port'] = '465';
	$config['smtp_auth'] = TRUE;
	$config['smtp_user'] = 'mail@swamediaproject.live'; //change this
    $config['smtp_pass'] = 'swam3dia'; //change this
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
?>
