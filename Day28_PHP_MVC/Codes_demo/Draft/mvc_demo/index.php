<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
    //echo date('Y-m-d H:i:s');
/**
 * mvc_demo/index.php
 * file index gốc của ứng dụng
 * Viết truy vấn để tạo CSDL và bảng
 * CSDL: php0720e_mvc
 * CREATE DATABSE IF NOT EXISTS
CHARACTER SET utf8 COLLATE utf8_general_ci
Bảng categories: id, name, description, create_at
#Tạo bảng categoris: id, name, descripton, status, created_at
CREATE TABLE categories(
id INT(11) AUTO_INCREMENT,
name VARCHAR(100),
description TEXT,
status TINYINT(1) DEFAULT 1,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
- Đây là file index gốc của ứng dụng MVC, là file code đầu tiên khi code MVC, vì đây là file sẽ nhận toàn bộ các
request gửi đến, file này quyết định gọi controller nào xử lý
- Ý tưởng code: phân tích URL, lấy được controller và action tương ứng, khởi tạo obj controller, từ đối tượng đó
truy cập action tương ứng
- Với MVC, thì các url khi định nghĩa ra cần phải tuân theo quy định của chính bạn, với MVC này url luôn có dang:
index.php?controller=<tên-controller>&action=<tên-phương-thức-của-controller>
VD: index.php?controller=category&action=create
index.php?controller=category&action=index
 * - Khi code MVC, cần thay đổi tư duy nhúng file tính từ file index.php gốc của ứng dụng
 * - Quy tắc đặt tên file:
 *  + Các file mode: Category.php, Product.php, OrderDetail.php
 *  + Tên file controllers: CategoryController.php, ProductController.php, OrderDetailController.php
 *
 * - Demo chức năng thêm mới danh mục:
 * index.php?controller=category&action=create
 *
 */
//echo "index.php";
// - Lấy ra các giá trị của các tham số từ url, cần bắt chặt chẽ đề đề phòng trang chủ, là trang ko truyền tham số gì lên url cả
//Mặc định nếu là trang chủ thì do controller = home xử lý
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
//echo $controller;
//Lấy tham số ction từ url:
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//echo $action;

// - Phân tích controller, biến đổi thành file controller tương ứng, mục đích để nhùng file controller đó vào
// Với CRUD danh mục thì file controller đích là:
// CategoryController.php, biến $category = category
// Biến đổi ký tự đầu tiên -> ký tự hoa
$controller = ucfirst($controller);
// Nối thêm chuỗi Controller vào sau
$controller .= "Controller";
//Tạo biến khác để lưu tên file controller
$controller_file = "$controller.php";
//Tạo biến chứa đường dẫn tới file controller trên để chuẩn bị nhúng file, luôn phải lưu ý là đứng từ file index gốc của ứng dụng
//để nhúng file
$controller_path = "controllers/$controller_file";
//Kiểm tra nếu ko tồn tài ile thì báo Not fount
if (!file_exists($controller_path)) {
    die('Trang hiện không tồn tại');
}


//Thực hiện nhunsg file để khơi tạo đối tượng từ class trong file đó
require_once "$controller_path";
//Khởi tạo đối tượng từ class controller
$obj = new $controller();
//Gọi phương thức tương ứng với action từ url từ obj vừa khởi tạo
//Cần check nếu tồn tại phương thức trong class thì mới truy cập được
if (!method_exists($obj, $action)){
    die("Phương thức $action ko tồn tại trong $controller");
}
//Đối tượng truy cập phương thức
$obj->$action();

?>