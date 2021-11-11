<?php
    session_start();#session_start() 這個函式，告訴系統準備開始使用
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";
?>