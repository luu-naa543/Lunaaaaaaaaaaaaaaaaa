
<script>
    function goBack() {
        window.history.back();
    }
</script>
<?php
require './administrator/elements_lan/mod/hanghoaCls.php';
$hanghoa = new hanghoaCls();
if (isset($_REQUEST['reqHanghoa'])) {
    $idhanghoa = $_REQUEST['reqHanghoa'];
    $obj = $hanghoa->HanghoaGetbyId($idhanghoa);
}
?>
<div class="itemsViewHangHoa">
    <center><img class="imgViewHanghoa" src='data:image/png;base64,<?php echo ($obj->hinhanh); ?>'/></center><br/>
    Sản phẩm: <?php echo $obj->tenhanghoa; ?><br/>
    Mô tả: <?php echo $obj->mota; ?><br/>
    Giá bán: <?php echo $obj->giathamkhao; ?><br/>
    <button onclick="goBack()">Go Back</button>
</div>


