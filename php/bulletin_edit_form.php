<?php
    error_reporting(0);//禁用錯誤報告，也就是不顯示錯誤
    session_start();#告訴系統準備開始使用
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }#保護程式,必須登入才能執行下一步,沒登入就會跳回登入畫面
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","","mydb");
        #mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET[bid]}");
        #mysql_fetch_array() 函數從結果集中取得，或數字數組，或函數兼有返回根據從結果集取得的行生成的目錄，如果沒有更多行則返回false。
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>