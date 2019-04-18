<?php
 
$myfile = fopen("code.cpp", "w") or die("Unable to open file!");
$txt = $_POST["code"];

fwrite($myfile, $txt);
fclose($myfile);

#system ("ls -al"); 
shell_exec('g++ code.cpp -o excute.exe');
shell_exec('./excute.exe > saveResult.txt');

$txtfile = fopen("saveResult.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($txtfile)) {
    echo fgets($txtfile) . "<br>";
}
fclose($myfile);

#exec("ls -al");  

?>
