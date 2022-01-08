<http>
    <head><title>新增使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    //禁用錯誤報告，也就是不顯示錯誤
    session_start();#告訴系統準備開始使用
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    #保護程式,必須登入才能執行下一步,沒登入就會跳回登入畫面
    else{
        echo "
            <form action=user_add.php method=post>
                帳號 : <input type=text name=id><br>
                密碼 : <input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";#新增帳號密碼
    }
    ?>
    </body>
</http>