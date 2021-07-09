<?php
/**
 * 1. Khái niệm:
 * - Model - View - Controller
 * - Frameworl, CMS của PHP đều được dựng dựa trên MVC
 * - Tách biệt website thành 3 thành riêng biệt
 * - Do viết dựa trên OOP nên khá khó học với các bạn mới
 * 2. Thành phần:
 * - M - Model: tương tác với CSDL - code thao tác với CSDL
 * (SELECT, INSERT, UPDATE, DELETE) đều viết hết trong class
 * Model này
 * - V - View: nơi hiển thị giao diện tới người dùng
 * - C - Controller: trung gian, luân chuyển dữ liệu giữa M và V
 * 3. Xây dưng ứng dụng CRUD theo mô hình MVC:
 * - Dựng cấu trúc thư mục MVC:
 * mvc_demo/asset: chứa css, js, image, font...
 *                  /css/style.css: chứa các file css
 *                  /js/script.js: chứa các file js
 *                  / images/abc.png: chứa các ảnh
 *         /configs: chứa các cấu hình hệ thống như DB, Mail...
 *                  /Database.php: class chứa cấu hình DB
 *         /controllers: chứa các class Controller - C
 *                  /CategoryController.php:
 *         /models: chứa các class Model - M trong MVC
 *                  /Category.php
 *         /views: chứa các thư mục con liên quan đến đối tượng
 *                  /categories: chứa các file crud của danh mục
 *                              /index.php: liệt kê danh mục
 *                              /create.php: thêm mới danh mục
 *                              /update.php: cập nhật danh mục
 *                  /layouts: chứa các file layout của ứng dụng
 *                              /main.php
 *         /index.php: file index của ứng dụng
 *         /.htaccess: file rewrite url
 *
 *
 */
?>