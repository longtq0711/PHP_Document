<?php
//mvc_demo/views/layouts/main.php
//File layout chính của ứng dụng, chứa các thành phần chung để các view cùng sử dụng
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<!--  Nhúng header  -->
<div class="header">
    <h1>Đây là header</h1>
  <?php require_once 'header.php'; ?>
</div>
<div class="main-content">
<!--    Đổ dữ liệu động của từng view vào đây-->
    <!--  Hiển thi nội dung động  -->
<!--    Do bên controller đã nhúng file layout rồi nên file này có thể sử dụng được các thuộc tính của controller đó-->
    <?= $this->content;?>
</div>
<!--  Nhúng footer  -->
<div class="footer">
    <h1>Đây là footer</h1>
  <?php require_once 'footer.php'; ?>
</div>
<script src="assests/js/script.js">

</script>
</body>
</html>
