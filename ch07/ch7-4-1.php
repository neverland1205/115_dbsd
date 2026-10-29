<?php
include("about_me.php");
echo"EX01<br/>";
    $str1 = "PHP and MySQL Web Programming"; // 字串變數
    $str2 = " PHP與MySQL網頁設計範例教本 ";

    echo "測試英文字串1: " . $str1 . "\"<br/>";
    echo "測試中文字串2: " . $str2 . "\"<br/>";

    echo "English string length: " . strlen($str1) . "<br/>";
    echo "中文字串長度: " . strlen($str2) . "<br/>";

    echo "Lower Case: " . strtolower($str1) . "<br/>";
    echo "Upper Case: " . strtoupper($str2) . "<br/>";

    echo "Remove whitespace from both ends: \"" . trim($str2) . "\"<br/>";
    echo "Remove whitespace from both start: \"" . ltrim($str2) . "\"<br/>";
    echo "Remove whitespace from both ends: \"" . rtrim($str2) . "\"<br/>";
    echo "Remove whitespace from both ends: \"" . chop($str2) . "\"<br/>";