
 <?php
$koneksi = mysql_connect("localhost","","");
if(!$koneksi){
   echo "Gagal";
}
$db = mysql_select_db("randis_pusinfolahta");
?> 