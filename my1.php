<?php
$link = $_SERVER['SERVER_NAME'];
$names = $_POST[text];
$links = $_POST[url];
$ms = json_decode(file_get_contents('test.json'), true);
if(array_key_exists($names, $ms))
 {
 require('err.php');
exit;    
}
foreach($ms as $key => $value) 
  {$ms[$asd] = $asd1;} 
$json = json_encode($ms) ;
$fp = fopen('test.json',"c");
$js = stripslashes($json); 
fwrite($fp,$js); 
fclose($fp);

?>
<div align="center">Ваша короткая ссылка:</br></br><a href="http://<?php echo"$link/$names"?>"> <?php echo "http://$link/$asd " ?></div>
