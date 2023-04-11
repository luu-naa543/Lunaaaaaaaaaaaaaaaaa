<?php
require './administrator/elements_lan/mod/hanghoaCls.php';
$hanghoa = new hanghoaCls();

if (isset($_REQUEST['reqView'])) {
    $idloaihang = $_REQUEST['reqView'];
    $list_hanghoa = $hanghoa->HanghoaGetbyIdloaihang($idloaihang);
    $s = count($list_hanghoa);
} else {
    $list_hanghoa = $hanghoa->HanghoaGetAll();
    $s = count($list_hanghoa);
}
?>

<div>
    <?php
    foreach ($list_hanghoa as $v) {
        ?>
    <a href="./index.php?reqHanghoa=<?php echo $v->idhanghoa; ?>">
        <div class="itemsHanghoa">
            <img class="imgHanghoa" src='data:image/png;base64,<?php echo ($v->hinhanh);?>'/><br/>
            Sản phẩm: <?php echo $v->tenhanghoa; ?><br/>
            Giá bán: <?php echo $v->giathamkhao; ?>
        </div>
    </a>   
    <?php
    }
    ?>
</div>


