<?php
/**
 * - Với thư viện MySQLi có cả cú pháp của OOP tuy nhiên MySQLi chỉ hỗ trợ kết nối tới 1 CSDL duy nhất là MySQL
 * - Cơ chế PDO - PHP Data Object là cơ chế kết nối CSDL thường được sử dụng nhất trong các Framework và CMS
 * - PDO hỗ trợ kết nối tới tất cả các CSDL thông thường
 * - PDO có 1 cơ chế giúp bảo mật câu truy vấn SQL
 * SQL Injection thông qua bind param - tạo câu truy vấn dạng tham số
 * 2 - Demo PDO:
 *  B1: Khởi tạo kết nối
 * - Data source name: dữ liệu nguồn của CSDL
 * - DSN k được chứa dấu cách, k được xuống dòng
 */
const DB_DSN = 'mysql:host=localhost;dbname=php0720e_pdo;port=3306;charset=utf8';
//Username kết nối vào CSDL
const DB_USERNAME = 'root';
//Password kết nối vào CSDL
const DB_PASSWORD = '';

//Thực hiện kết nối, nên sử dụng cú pháp try ..catch để thực hiện kết nối
try{
    $connect = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    die("Lỗi kết nối" . $e->getMessage());
}
echo "<h1> Kết nốí CSDL thành công theo cơ chế PDO</h1>";

// 2 - Truy vấn INSERT: thêm vào bảng categories: id, name, description, status, created_at
// + Viết câu truy vấn, cần để ý nếu giá trị truyền vào là string -> cần khai báo tham sô còn nếu giá trị truyền vào biết
//chắc chăn là số -> không cần, vì lỗi bảo mật SQL Injection xảy ra chủ yếu với giá trị là string
$sql_insert = "INSERT INTO categories(name, description, status) 
VALUES(:name, :description, :status)";
//bind params. câu truy vấn đang có 3 tham số
// - Tạo đối tượng truy vấn. trả về 1 dối tượng truy vấn
$obj_insert = $connect->prepare($sql_insert);
// - (Options) Tạo mảng để truyền giá trị thật cho các tham số trong câu truy vấn, bước này chỉ có khi câu truy vấn có tham số
//số phần tử của mảng chính bằng số lượng tham số trong câu truy vấn
$inserts = [
    ':name' => 'Thể thao',
    ':description' => 'Mô tả cho thể thao',
    ':status' => 1
];
//Thực thi truy vấn dựa trên đối tượng truy vấn trên, với INSERT, UPDATE, DELETE -> boolean
$is_insert = $obj_insert->execute($inserts);

var_dump($is_insert);

// 3 - Truy vấn UPDATE: cập nhật bản ghi có id = 1, set name = New Name, status = 0, description = ABC
// + Tạo câu truy vấn dạng tham số
$sql_update = "UPDATE categories SET name = :name, description = :description, status = 0
WHERE ID = 1";
// + Chuẩn bị đói tượng truy vấn
$obj_update = $connect->prepare($sql_update);
// + Tạo mảng để gắn giá trị cho 2 tham số
$updates = [
    ':name' => 'New Name',
    ':description' => 'ABC'
];
//Thực thi đối tượng truy vấn
$is_update = $obj_update->execute($updates);
var_dump($is_update);
//4 - Truy vấn DELETE: xóa các bản  ghi có id > 10
// + Tạo câu truy vấn
$sql_delete = "DELETE from categories WHERE ID > 10";
$obj_delete = $connect->prepare($sql_delete);
//+ Ko có bước tạo mảng để gắn giá trị vì câu truy vấn không có tham số nào
//+ Thực thi đối tượng truy vấn
$is_delete = $obj_delete->execute();
var_dump($is_delete);

// 5 - Truy vấn SELECT
// a, Lấy nhiều bản ghi: lấy tất cả các bản ghi đang có sắp xếp theo mới nhâts
// + Viết câu truy vấn
$sql_select_all = "SELECT * FROM categories ORDER BY created_at DESC ";
// + Chuẩn bị đối tượng truy vấn
$obj_select_all = $connect->prepare($sql_select_all);
// + Bỏ qua bước tạo mảng để truyền giá trị vì ko có tham số
// + Thực thi đối tượng truy vấn, với truy vấn SELECT thì k cần thao tác với kết quả trả về của việc thực thi
$obj_select_all->execute();
// + Lấy 1 mảng gồm nhiều phần tử sau khi thực thi truy vấn
// Gọi hằng số trong 1 class theo cú pháp <tên-class>::<tên-hằng>, cú pháp giống gọi thuộc tính/ phương thức static
$categories = $obj_select_all->fetchAll( PDO::FETCH_ASSOC);

// b, Lấy 1 bản ghi duy nhất: lấy bản ghi có id = 1
// + Tạo câu truy vấn
$sql_select_one = "SELECT * FROM categories WHERE ID = 1";
// + Chuẩn bị dối tượng truy vấn
$obj_select_one = $connect->prepare($sql_select_one);
// + Bỏ qua tạo mảng vì câu truy vấn không có tham số nào
// + Thực thi đối tượng truy vấn
// + Trả về mảng 1 chiều chứa bản ghi tương ứng
$obj_select_one -> execute();
$category = $obj_select_one->fetch(PDO::FETCH_ASSOC);
echo"<pre>";
print_r($category);
echo "</pre>";


//DEMO lỗi bảo mật SQL INJECTION
//Tìm kiếm danh mục dựa theo name
// + Tạo câu truy vấn:
$keywored = 'new OR TRUE#';
$sql_search = "SELECT * FROM categories WHERE '%$keywored%'";
// + cbi obj
$obj_search = $connect->prepare($sql_search);
obj_search->excecute
?>