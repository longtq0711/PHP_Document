<?php
//controllers/UserController.php
require_once 'controllers/Controller.php';
require_once 'models/User.php';

class UserController extends Controller {
<<<<<<< HEAD
    //Phương thức đăng kí user
    //index.php?controller=user&action=register
    public function register(){
        //Xử lý submit form khi user đăng ký
=======
    //Phương thức đăng ký user
    //index.php?controller=user&action=register
    public function register() {
        // - Xử lý submit form khi user Đăng ký
>>>>>>> 4d7dd67e5c286217233e10da8f721933570396d5
        // + Debug mảng $_POST
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        // + Nếu submit form thì mới xử lý
<<<<<<< HEAD
        if(isset($_POST['submit'])){
            // + Gán biến thao tác cho dễ
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            // + Validate form
            //Tất cả các trường k được để trống
            //Mật khẩu nhập lại phải trùng
            //Không được đăng kí trùng username đã tồn tại
            //Gọi model để kiểm tra xem có user nào tồn tại với username cho trước hay không
=======
        if (isset($_POST['submit'])) {
            // + Gán biến thao tác cho dễ
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['confirm_password'];
            // + Validate form
            // Tất cả các trường ko đc để trống
            // Mật khẩu nhập lại phải trùng
            // Không đc đky trùng username đã tồn tại
            // Gọi model để kiểm tra xem có user nào đã tồn tại
            // với username cho trước hay ko
>>>>>>> 4d7dd67e5c286217233e10da8f721933570396d5
            $user_model = new User();
            $user = $user_model->getUser($username);
//            echo "<pre>";
//            print_r($user);
//            echo "</pre>";
<<<<<<< HEAD
            if(empty($username)||empty($password)||empty($password_confirm)) {
                $this->error = 'Không được để trống';
            } elseif ($password != $password_confirm) {
                $this->error = 'Mật khẩu nhập lại chưa đúng';
            } elseif (!empty($user)) {
                $this->error = "Username $username đã tồn tại";
            }
            //Đawg ký user chỉ khi không có lỗi xảy ra
            if (empty($this->error)) {
                // + Gán giá trị cho các thuộc tính tương ứng của đối tượng user
                $user_model->username = $username;
                // + Luôn luôn phải mã hóa mật khẩu trước khi mã hóa vào CSDL, dùng mã hóa md5 của PHP
                $user_model->password = md5($password);
                $is_insert = $user_model->registerUser();
                if ($is_insert){
                    $_SESSION['success'] = 'Đăng ký thành công';
                    header('location:index.php?controller=user$action=login');
                    exit();
                }else{
                    $this->error = 'Đăng ký thất bại';
                }
            }

        }

        // - Hiển thị ra view - form đăng ký cho user
        // Lấy nội dung view
        $this->content = $this->render('views/users/register.php');
        // + Gọi layout để hiển thị nội dung view vừa lấy được
        //Tạp 1 layout khác tương đương với user chưa login
        //Copy file views/layout/main.php -> main.login.php
        require_once 'views/layouts/main_login.php';
    }
    public function login(){
        //Nếu đã login rồi thì không cho truy cập lại form login
        if (isset($_SESSION['user'])){
            $_SESSION['success'] = 'Bạn đã đăng nhập rồi';
            header('Location:index.php?controller=product'
            );
            exit();
        }
        //Xử lý submit form
        // - Debug mảng $_POST
        echo"<pre>";
        print_r($_POST);
        echo"</pre>";
        //Nếu user submit form thì mới xử lý
        if(isset($_POST['submit'])) {
            // - Gán biến trung gian
            $username = $_POST['username'];
            $password = $_POST['password'];
            // - Validate form: k được để trống
            if (empty($username) || empty($password)) {
                $this->error = 'K được để trống';
            }
            // - Xử lý login chỉ khi nào không có lỗi xảy ra
            if (empty($this->error)) {
                $user_model = new User();
                //Do password đang lưu trong CSDL là password đã mã hóa theo cơ chế md5, nên lúc check login cũng phải
                //mã hóa password trước rồi mới so sánh
                $user = $user_model->getUserLogin($username, md5($password));
               if (!empty(users)) {
                   $_SESSION['user'] = $user;
                   $_SESSION['success'] = 'Đăng nhập thành công';
                   header('Location:index.php?controller=product');
                   exit();
               } else {
                   $this->error = 'Sai tài khoản mật khẩu';

               }
            }
        }

            // - Lấy nội dung view login
            $this->content = $this->render('views/users/login.php');

            // - Goị layout để hiển thị view
            require_once 'views/layouts/main_login.php';

            //Xử lý logout
            public function logout(){
                unset($_SESSION['user']);
                $_SESSION['success'] = 'Log out thành công';
                header('Location: index.php?controller=user&action=login');
                exit()
        }

=======

            if (empty($username) || empty($password)
                || empty($password_confirm)) {
                $this->error = 'Không đc để trống';
            } elseif ($password != $password_confirm) {
                $this->error = 'Mật khẩu nhập lại chưa đúng';
            } elseif (!empty($user)) {
                $this->error = "Username $username đã tồn tại";
            }
            // Đăng ký user chỉ khi ko có lỗi nào xảy ra
            if (empty($this->error)) {
                // + Gán giá trị cho các thuộc tính tương ứng
                // của đối tượng user
                $user_model->username = $username;
                // + Luôn luôn phải mã hóa mật khẩu trước khi lưu
                // vào CSDL, để demo dùng mã hóa md5 có sẵn của PHP
                $user_model->password = md5($password);
                $is_insert = $user_model->registerUser();
                if ($is_insert) {
                    $_SESSION['success'] = 'Đăng ký thành công';
                    header
    ('Location: index.php?controller=user&action=login');
                    exit();
                } else {
                    $this->error = 'Đăng ký thất bại';
                }
            }
        }

        // - Hiển thị ra view - form đăng ký cho user
        // + Lấy nội dung view
        $this->content =
        $this->render('views/users/register.php');
        // + Gọi layout để hiển thị nội dung view vừa lấy đc
        // Tạo 1 layout khác tương đương với user chưa login
        // Copy file views/layouts/main.php -> main_login.php
        require_once 'views/layouts/main_login.php';
    }

    public function login() {
        // Nếu đã login r thì ko cho truy cập lại form login
        if (isset($_SESSION['user'])) {
            $_SESSION['success'] = 'Bạn đã đăng nhập r';
            header('Location:index.php?controller=product');
            exit();
        }

        // Xử lý submit form
        // - Debug mảng $_POST
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        // - Nếu user submit form thì mới xử lý
        if (isset($_POST['submit'])) {
            // - Gán biến để thao tác cho dễ
            $username = $_POST['username'];
            $password = $_POST['password'];
            // - Validate form: ko đc để trống
            if (empty($username) || empty($password)) {
                $this->error = 'Ko đc để trống';
            }
            // - Xử lý login chỉ khi nào ko có lỗi xảy ra
            if (empty($this->error)) {
                $user_model = new User();
                // Do password đang lưu trong CSDL là password đã
                // mã hóa theo cơ chế md5, nên lúc check login
                // cũng phải mã hóa password trước r mới so sánh đc
                $password = md5($password);
                $user = $user_model
                    ->getUserLogin($username, $password);
                if (!empty($user)) {
                    // Tạo ra phiên làm việc cho user vừa đăng nhập
                    $_SESSION['user'] = $user;
                    $_SESSION['success'] = 'Đăng nhập thành công';
                    header('Location:index.php?controller=product');
                    exit();
                } else {
                    $this->error = 'Sai tài khoản hoặc mật khẩu';
                }
            }
        }

        // - Lấy nội dung view login
        $this->content = $this->render('views/users/login.php');
        // - Gọi layout để hiển thị view
        require_once 'views/layouts/main_login.php';
    }

    // Xử lý logout
    public function logout() {
        unset($_SESSION['user']);
        $_SESSION['success'] = 'Logout thành công';
        header('Location:index.php?controller=user&action=login');
        exit();
>>>>>>> 4d7dd67e5c286217233e10da8f721933570396d5
    }
}