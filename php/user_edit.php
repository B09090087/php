<?php
    error_reporting(0);//禁用錯誤報告，也就是不顯示錯誤
    session_start();#告訴系統準備開始使用
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#三秒後回到登入畫面
    }
    else{
        #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
        echo "修改錯誤";
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }else{
        echo "修改成功，三秒鐘後回到網頁";
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }
}
?>