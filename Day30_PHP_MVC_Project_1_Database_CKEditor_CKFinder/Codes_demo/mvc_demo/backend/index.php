<?php
session_start();
//set múi giờ
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
 * backend/index.php
 * File index gốc của ứng dụng, là file đầu tiên sẽ code trong mô hình MVC
 * + Mục đích: phân tích url, gọi đúng controller và action để xử lý
 *
 *
 */
//URL trong MVC hiện tại luôn có dạng sau:
//index.php?controller=category&action=create
// - Từ url lấy ra controller và action
$controller = isset($_GET['controller'])?$_GET['controller']: 'home';
$action = isset($_GET['action'])?$_GET['action'] : 'index';
// - Biến đổi giá trị controller -> tên file để nhúng file controller
$controller = ucfirst($controller);
$controller .= "Controller";
$controller_path = "controllers/" . $controller . ".php";

if (!file_exists($controller_path)){
    die('Trang bạn tìm k tồn tại');
}

require_once $controller_path;
// - Khởi tạo đối tượng từ class controller
$obj = new $controller();
// - Kiểm tra nếu phương thức ko tồn tại thì báo lỗi
if (!method_exists($obj,$action)){
    die("Phương thức $action ko tồn tại trong phương thức $controller");
}

$obj->$action();


?>