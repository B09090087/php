<html>
    <head><title>修改使用者</title></head>
    <body>
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
        #mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn, "select * from user where id='{$_GET[id]}'");
        #mysql_fetch_array() 函數從結果集中取得，或數字數組，或函數兼有返回根據從結果集取得的行生成的目錄，如果沒有更多行則返回false。
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row[id]}>
            帳號 : {$row[id]}<br>
            密碼 : <input type=text name=pwd value={$row[pwd]}><p></p>
            <input type=submit value=修改>
        </form>
        ";
        }
        ?>
    </body>
</html>