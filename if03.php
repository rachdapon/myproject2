<?php
//--if03.php
$name="Rattiya";
if ($name== "Rattiya")
{ 
echo "ยินดีต้อนรับคุณ <font color 'red'>
$name</font>คือผู้จัดการ";
echo "<a href='http://www.arnut.com>
ไปเว็บ Arnut.com </a>";


}elseif($name== "admin")
{ 
		echo "ยินดีต้อนรับ <font color 'bule'>
$name</font>คือผู้ดูแลระบบ";
		
}elseif($name== "Webmaster")
{ 
		echo "ยินดีต้อนรับ <font color 'Green'>
$name</font>คุณคือผู้ดูแลเว็บไซต์";
	
}else
{ 
		echo "ยินดีต้อนรับคุณ <font color 'pink'>
$name</font>$name คือผู้ใช้งาน";
}

?>

