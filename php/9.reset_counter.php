<?php
    session_start();#session_start() 這個函式，告訴系統準備開始使用
    unset($_SESSION["counter"]);#unset() 函數用於銷毀給定的變量
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";

?>