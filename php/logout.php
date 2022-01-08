<?php
    session_start();#告訴系統準備開始使用
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";
#登出程式,登出成功跳回登入介面。
?>