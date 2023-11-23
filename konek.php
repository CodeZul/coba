<?php
$konek=mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($konek, "db_publik");
if($konek){
    echo "Connect";
}
?>