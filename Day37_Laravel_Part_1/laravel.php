<?php
/**
 * 1 - Laravel:
 *  + Framework
 *  + CMS (WP, Zoola...): Hệ quản trị nội dung
 * 2 - Cài đặt:
 *  + Laravel cài đặt dựa trên phiên bản c
 *  + Sử dụng tool Composer để cài đặt
 *  + Composer: công cụ quản lý thư viện, vì laravel cần các thư viện bên thứ 3 thì mới chạy được
 *  + composer install
 *  + composer update
 * 3 - Cấu trúc thư mục của laravel
 * 4 - Artisan:
 * Học laravel phải biết dùng artisan: tạo rất nhiều thứ chuẩn laravel bằng artisan
 * 5 - Code quản lý sản phẩm
 *  + Tạo CSDL: php0720e_laravel
 * CREATE DATABASE IF NOT EXISTS php0720e_laravel CHARACTER SET utf8 COLLATE utf8_general_ci;
 * Tạo bảng products: dùng artisan để tạo thông qua cơ chế migrate
 * id: Khóa chính
 * name: tên sp, varchar
 * price: giá sp, int
 * description: chi tiết sp, TEXT
 * status: trạng thái sp, Tinyint
 * created_at: ngày tạo bảo ghi, tự động sinh
 * update_at: ngày cập nhật cuối
 *  + Tạo file migrate cho chức năng tạo bảng
 *      File sinh ra nằm tại database/migration
 *      Chạy lệnh sau để tạo cấu trúc CSDL theo các file migrate đã tạo: php artisan migrate
 *  + Cần kết nối CSDL thì mới chạy được migrate, cài dặt file tại .env
 *  + Tạo controller chuẩn Laravel bằng artisan:
 * php artisan make:model Product
 *  + Tao view: tạo thủ công trong resources:
 * Laravel sử dụng Engine Template là Blade cho view
 * resources/views/
 *                /layouts/main.blade.php
 *                /products/index.blade.php
 *                         /create.blade.php
 *                         /update.blade.php
 *                         /detail.blade.php
 *
 */