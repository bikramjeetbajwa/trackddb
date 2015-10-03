<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TrackDDB</title>
</head>

<body style="font-family:Verdana, Geneva, sans-serif; font-size:12px">
<table border="0" cellpadding="1" cellspacing="0" ><tr><td>
<b><a href="<?= url::base(true); ?>">Home</a></b><br><br>
</td></tr><tr><td>
This is Fizzbuzz<br>
</td></tr><tr><td>
<?php
foreach($fizzbuzz as $key => $val)
{
	echo $key." : ".$val."<br>";
}
?>
</td></tr></table>
</body>
</html>

