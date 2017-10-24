<?php
//--switch01.php
$username="Webmaster";
switch($username)
{
 case "manager":
       echo "ยินดีต้อนรับคุณคือผู้จัดการ";
       break;
 case "Admin":
	   echo "ยินดีต้อนรับคุณคือดูแลระบบ";
       break;
 case "webmaster":
	   echo "ยินดีต้อนรับคุณคือผู้ดูแลเว็บไซ";
       break;
 default:
	   echo "ยินดีต้อนรับคุณคือผู้ใช้งาน";
}
?>
       