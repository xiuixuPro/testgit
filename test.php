<?php
header("Content-type: text/html; charset=utf-8"); 
var_dump($_POST);
echo "<meta name='Generator' content='EditPlus'>
<meta name='Author' content=''>
<meta name='Keywords' content=''>
<meta name='Description' content=''>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
echo "<link rel='stylesheet' type='text/css' href='css/xcConfirm.css'/><script src='js/jquery-1.9.1.js' type='text/javascript' charset='utf-8'></script>
		<script src='js/xcConfirm.js' type='text/javascript' charset='utf-8'></script><script>
var txt=  '操作成功';
					window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.success);
</script>";
?>