<?php
require './elements_lan/mod/loaihangCls.php';
$obj = new loaihangCls();
$list_loaihang = $obj->LoaihanggetAll();
?>
<div><img class="iconimg" src="./img_lan/goods.png"/>Quản lý Hàng hóa</div>
<hr>
<div><img class="title_mod"><img class="iconimg" src="./img_lan/insert.png"/>Thêm hàng hóa</div>
<div class="content_mod">
    <form name="newhanghoa" id="formadd_hanghoa" method="post"
          enctype="multipart/form-data"
          
          ></form>
</div>
