<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang sản phẩm hàng điện máy</title>
        <link type="text/css" rel="stylesheet" href="public_files/pmycss.css"/>
        
    </head>
    <body>
        <div id="lvOne"></div>
        <div id="lvTwo"><?php require './apart/menuLoaihang.php'; ?></div>
        <div id="lvThree">
        <?php
        if (!isset($_REQUEST['reqHanghoa'])) {
            require './apart/viewListLoaiHang.php';
        } else {
            require './apart/viewHangHoa.php';
        }
        ?>
        </div>    
    </body>
</html>
