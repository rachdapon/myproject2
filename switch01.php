<?php
//--switch01.php
$username="webmaster";
switch ($username)
{
case "manager":
		echo "ยินดีต้อนรับทุกคน $username คุณคือผูั้จัดการ.";
		break;
case  "admin":
		echo "ยินดีต้อนรับทุกคน $username คุณคือผู้ดูแลระบบ";
		break;
case "webmaster":
		echo "ยินดีต้อนรับทุกคน $username คุณคือผู้ดูแลเว็บไซต์";
		break;
default:
		echo  "ยินดีต้อนรับทุกคน $username คุณคือผู้ใช้งาน";
}
?>		
		
		