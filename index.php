<?php

print "Hello World <br> ";
print "version 9 <br>";

for($i = 0; $i < 100000; $i++) {
     $str = generateRandomString(30);
     base64_encode($str);
     $a += $i;
}


function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}



phpinfo();

?>
