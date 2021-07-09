<?php
//controllers/CartController
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

class CartController extends Controller
{
<<<<<<< HEAD
    //Xử lý thêm sản phẩm vào giỏ
    public function add(){
        //echo "abcdef";
        //Debug các thông tin gửi lên
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        //Check nếu không tồn tại tham số id truyền thì báo lỗi

        //Giỏ hàng
        // + Có rất nhiều cơ chế lưu trữ giỏ hàng khác nhau
        // Sử dụng session, với giỏ hàng hiện tại sẽ có cấu trúc như sau:
        // Mỗi 1 phần tử của giỏ hàng sẽ có dạng: product_id => [title, price, avatar, quantity]
        $product_id = $_GET['id'];
        // Lấy thông tin sản phẩm dựa vào id
        $product_model = new Product();
        $product = $product_model -> getProductByID($product_id);
//        echo "<pre>";
//        print_r($product);
//        echo "</pre>";
        $cart_item = [
            'name' => $product['title'],
            'price' => $product['price'],
            'avatar' => $product['avatar'],
            //Mặc định mỗi lần thêm vào giỏ sẽ thêm 1 sản phẩm
            'quantity' => 1
        ];
        //Logic thêm vào giỏ hàng
        // + Tạo 1 session để lưu giỏ hàng $_SESSION['cart']
        // + Nếu sp thêm chưa tồn tại trong giỏ hàng -> thêm phần tử mới cho mảng session giỏ hàng
        // + Nếu sp thêm đã tồn tại trong giỏ -> chỉ cập nhật số lượng sản phẩm đó tăng lên 1
        // product_it => [title, price, avatar, quantity]

        //XỬ LÝ
        // + Nếu giỏ hàng chưa hề tồn tại, thì tạo session và thêm sản phẩm vào giỏ
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'][$product_id] = $cart_item;
        } else {
            // Nếu thêm sản phẩm đã tồn tại trong giỏ thì chỉ tăng số lượng lên 1
            if (array_key_exists($product_id, $_SESSION['cart'])){
            $_SESSION['cart'][$product_id]['quantity']++;
            } else $_SESSION['cart'][$product_id] = $cart_item; // SP chưa tồn tại thì thêm mới
        }
        echo "<pre>";
     print_r($_SESSION);
    echo "</pre>";

    }

    //Giỏ hàng của bạn
    //index.php?controller=cart&action=index
    public function index(){
        //Lấy ra nội dung view
        $this->content = $this->render('views/carts/index.php');
        //Gọi layout để hiển thị ra view vừa lấy được
        require_once 'views/layouts/main.php';

    }
=======
  //Xử lý thêm sản phẩm vào giỏ
  public function add() {
//    echo "abcdef";
    // Debug thông tin gửi lên
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // Check nếu ko tồn tại tham số id truyền thì báo lỗi

    // GIỎ HÀNG
    // + Có rất nhiều cơ chế lưu trữ giỏ hàng khác nhau
    // sử dụng session, giỏ hàng hiện tại sẽ có cấu trúc
    // như sau:
    // Mỗi 1 phần tử của giỏ hàng sẽ dạng:
    //product_id => [title, price, avatar, quantity]
    $product_id = $_GET['id'];
    // Lấy thông tin sản phẩm dựa theo id
    $product_model = new Product();
    $product = $product_model->getProductById($product_id);
//    echo "<pre>";
//    print_r($product);
//    echo "</pre>";
    $cart_item = [
        'name' => $product['title'],
        'price' => $product['price'],
        'avatar' => $product['avatar'],
        // Mặc định mỗi lần thêm vào giỏ sẽ thêm 1 sp
        'quantity' => 1
    ];
    // Logic thêm vào giỏ hàng
    // + Tạo 1 session để lưu giỏ hàng $_SESSION['cart']
    // + Nếu sp thêm chưa tồn tại trong giỏ hàng ->
    //thêm phần tử mới cho mảng session giỏ hàng
    // + Nếu sp thêm đã tồn tại trong giỏ -> chỉ cập nhật
    //số lượng sản phẩm đó tăng lên 1
    // product_id => [title, price, avatar, quantity]

    // XỬ LÝ
    // + Nếu giỏ hàng chưa hề tồn tại, thì tạo session và
    //thêm sp đầu tiên vào giỏ
    if (!isset($_SESSION['cart'])) {
//      $_SESSION['cart'] = [
//        $product_id => $cart_item
//      ];
      $_SESSION['cart'][$product_id] = $cart_item;
    } else {
      // Nếu thêm sản phẩm đã tồn tại trong giỏ, thì
      //chỉ tăng số lượng lên 1
      if (array_key_exists($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$product_id]['quantity']++;
      }
      // Nếu sp chưa tồn tại thì giống thêm mới
      else {
        $_SESSION['cart'][$product_id] = $cart_item;
      }
    }
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";

  }


  // Giỏ hàng của bạn:
  //index.php?controller=cart&action=index
  public function index() {
    // Lấy nội dung view
    $this->content
    = $this->render('views/carts/index.php');
    // Gọi layout để hiển thị ra view vừa lấy đc
    require_once 'views/layouts/main.php';
  }
>>>>>>> 18b556f2ad4b2901543918d75e765062e54ce486
}