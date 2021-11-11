<?php
    error_reporting(0);//error_reporting()函式是用來設定錯誤級別並返回當前級別的
    $conn=mysqli_connect("localhost","root","", "mydb");#mysqli_connect() 建立資料庫連結
    $result=mysqli_query($conn, "select * from bulletin");#mysqli_query() 從資料庫查詢資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){//迴圈
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
