<?php

require '../../elements_lan/mod/loaihangCls.php';
if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
            //xử lý thêm
            $tenloaihang = $_REQUEST['tenloaihang'];
            $tenhinhanh = $_REQUEST['tenhinhanh'];
            $hinhanh = $_FILES['fileimage']['tmp_name'];
            $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh)));
            
            $loaihang = new loaihangCls();
            $rs = $loaihang->LoaihangAdd($tenloaihang, $tenhinhanh, $hinhanh);
            if ($rs) {
                header('location:../../index.php?req=loaihangView&result=ok');
            } else {
                header('location:../../index.php?req=loaihangView&result=notok');
            }
            break;
        case 'deleteloaihang':
            $idloaihang = $_REQUEST['idloaihang'];
            $loaihang = new loaihangCls();
            $rs = $loaihang->LoaihangDelete($idloaihang);
            if ($rs) {
                 header('location:../../index.php?req=loaihangView&result=ok');
            } else {
                header('location:../../index.php?req=loaihangView&result=notok');
            }
            break;
        case 'updateloaihang':
            $idloaihang = $_POST['idloaihang'];
            $tenloaihang = $_POST['tenloaihang'];
            $tenhinhanh = $_POST['tenhinhanh'];
            
            echo var_dump($_POST);
            echo var_dump($_FILES);
            
            //kiểm tra có đổi hình ảnh ko
            if (getimagesize($_FILES['fileimage']['tmp_name']) == false) {
                $hinhanh = $_POST['hinhanh'];
            } else {
            $hinhanh = $_FILES['fileimage']['tmp_name'];
            $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh)));
            }
            
            $loaihang = new loaihangCls();
            $rs = $loaihang->LoaihangUpdate($tenloaihang, $tenhinhanh, $hinhanh, $idloaihang);
            if ($rs)  {
                header('location:../../index.php?req=loaihangView&result=ok');
            } else {
                header('location:../../index.php?req=loaihangView&result=notok');
            }
            break;
        default :
             header('location:../../index.php?req=loaihangView');
             break;
    }
} else {
    header('location:../../index.php?req=loaihangView');
}

