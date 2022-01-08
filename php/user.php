<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);//禁用錯誤報告，也就是不顯示錯誤
        session_start();#告訴系統準備開始使用
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";;#三秒後回到登入畫面
        }
        else{   
            echo "<h1>使用者管理</h1>
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            #返回佈告欄列表按鈕 #表格
            $conn=mysqli_connect("localhost","root","","mydb");
            #mysqli_connect() 建立資料庫連結
            $result=mysqli_query($conn, "select * from user");
            #mysqli_query() 從資料庫查詢資料
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }#刪除該帳號密碼
            echo "</table>";
        }
    ?> 
    </body>
</html>