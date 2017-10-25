<?php
//--login.php

if ($username=="admin") {
  echo "ยินดีต้อนรับคุณ"  .$_POST ['username']."คุณคือผู้ดูแลระบบ";
  echo "<br><a "  href='admin/index.php'> ลิงค์ไปหน้า Backend</a>";
}
	elseif ($username=="admin") {
  echo "ยินดีต้อนรับ"  .$_POST ['username']."คุณคือสมาชิกชมรม";
  echo "<br><a "  href='home/index.php'> ลิงค์ไปหน้า Frontend</a>";
  
  elseif ($username=="admin") {
  echo "ยินดีต้อนรับ"  .$_POST ['username']."คุณคือผู้ดูแลระบบ";
  echo "<br><a "  href='../'>index.php'> ลิงค์ไปหน้า MYproject</a>";