<?php
require './administrator/elements_lan/mod/loaihangCls.php';
?>
<a href="./index.php">
    <div class="itemsmenu">
        <img class="imgmenu" src="./administrator/img_lan/home.png"/>Home
    </div>
</a>
<?php
$obj = new loaihangCls();
$list_loaihang = $obj->LoaihanggetAll();

foreach ($list_loaihang as $v) {
?> 
<a href="./index.php?reqView=<?php echo $v->idloaihang; ?>">
    <div class="itemsmenu">
        <img class="imgmenu" src='data:image/png;base64,<?php echo ($v->hinhanh);?>'/>
        <?php echo ($v->tenloaihang); ?>
    </div>
</a>
<?php
}
?>


