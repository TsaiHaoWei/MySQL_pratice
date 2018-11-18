<?php
header('content_type:text/html;charset=utf-8');
$str = '在<b>PHP</b>顯示<br>各種符號';
/*
\\=\
\"="
\{}={}
\t = tab
\xnn=ASCII十六位元對應字元
\$ = $
\[]=[]
\r= 歸位字元
\nn=ASCII八位元對應
*/
echo $str;
?>
