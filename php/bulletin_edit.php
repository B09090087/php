<?php

    error_reporting(0);//禁用錯誤報告，也就是不顯示錯誤
    session_start();#告訴系統準備開始使用
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }#保護程式,必須登入才能執行下一步,沒登入就會跳回登入畫面
    else{   
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","","mydb");
        #mysqli_query() 從資料庫查詢資料
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }
    }

?>