<?php
$client = new Yar_Client("http://127.0.0.1/api/");
/* the following setopt is optinal */
$client->SetOpt(YAR_OPT_CONNECT_TIMEOUT, 1);

/* call remote service */
$result = $client->api("parameter");
?>
