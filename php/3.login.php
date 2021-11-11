<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))
        echo "Welcome";
    else
        echo "fail login";
?>
<!--帳號密碼正確會顯示Welcome，錯誤則會顯示fail login-->