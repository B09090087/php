<?php
error_reporting(0);//禁用錯誤報告，也就是不顯示錯誤
session_start();#告訴系統準備開始使用
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
}#保護程式,必須登入才能執行下一步,沒登入就會跳回登入畫面
else{
#mysqli_connect() 建立資料庫連結
$conn = mysqli_connect("localhost", "root", "", "mydb");
#delete from 是用來刪除資料表中的資料。
$sql="delete from user where id = '$_GET[id]'";
if(!mysqli_query($conn,$sql)){
    echo "使用者刪除錯誤";
}
else{
    echo "使用者刪除成功";
}
echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
}
?>