<?php
//models/User.php
require_once 'models/Model.php';
class User extends Model {
<<<<<<< HEAD

    public $username;
    public $password;
    //Lấy username theo username truyền vào
    public function getUser($username){
        // - Tạo câu truy vấn dạng tham số do có giá trị truyền vào là 1 chuỗi
        $sql_select_one = "SELECT * FROM users WHERE username=:username";
        // - Tạo đối tượng truy vấn,
        $obj_select_one = $this->connection->prepare($sql_select_one);
        // - Tạo mảng để truyền giá trị thật cho tham số trong câu truy vấn
        $selects = [
            ':username' => $username
=======
    public $username;
    public $password;

    // Lấy user theo username truyền vào
    public function getUser($username) {
        // - Tạo câu truy vấn dạng tham số do có giá trị truyền vào
        //là 1 chuỗi
        $sql_select_one =
        "SELECT * FROM users WHERE username=:username";
        // - Tạo đối tượng truy vấn,
        $obj_select_one = $this->connection->prepare($sql_select_one);
        // - Tạo mảng để truyền giá trị thật cho tham số trong câu
        //truy vấn
        $selects = [
          ':username' => $username
>>>>>>> 4d7dd67e5c286217233e10da8f721933570396d5
        ];
        // - Thực thi đối tượng truy vấn
        $obj_select_one->execute($selects);
        // - Trả về dạng mảng
        $user = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    // Đăng ký user
<<<<<<< HEAD
    public function registerUser(){
        //- Tạo câu truy vấn
        $sql_insert = "INSERT INTO users(username, password) VALUES (:username, :password)";
        // - Chuẩn bị đối tượng truy vấn
        $obj_insert = $this->connection->prepare($sql_insert);
        // - Tạo mảng để gáng giá trị thật cho tham số truy vấn
=======
    public function registerUser() {
        // - Tạo câu truy vấn dạng tham số
        $sql_insert =
        "INSERT INTO users(username, password) 
         VALUES (:username, :password)";
        // - Cbi đối tượng truy vấn
        $obj_insert = $this->connection->prepare($sql_insert);
        // - Tạo mảng để gán trị thật cho tham số trong câu truy vấn
>>>>>>> 4d7dd67e5c286217233e10da8f721933570396d5
        $inserts = [
            ':username' => $this->username,
            ':password' => $this->password
        ];
        // - Thực thi đối tượng truy vấn
        $is_insert = $obj_insert->execute($inserts);
        return $is_insert;
    }

<<<<<<< HEAD
    //Login
    public function getUserLogin($username,$password){
        // - Tạo truy vấn dạng tham số
        $sql_select_one = "SELECT * FROM users WHERE username=:username AND password=:password";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects = [
            ':username' => $username,
            ':password' => $password
=======
    public function getUserLogin($username, $password) {
        // - Tạo truy vấn dạng tham số
        $sql_select_one =
        "SELECT * FROM users 
         WHERE username=:username AND password=:password";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects = [
          ':username' => $username,
          ':password' => $password
>>>>>>> 4d7dd67e5c286217233e10da8f721933570396d5
        ];
        $obj_select_one->execute($selects);
        $user = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}