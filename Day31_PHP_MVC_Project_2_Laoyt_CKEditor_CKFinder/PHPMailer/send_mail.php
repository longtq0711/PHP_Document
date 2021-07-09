<?php
/**
<<<<<<< HEAD
 * Demo gửi mail thực tế với thư viện PHPMailer
 * Thực tế các hệ thống đều gửi mail rất nhiều: register account, đặt hàng, thanh toán...
 * PHP có 1 hàm gửi mail: mail()
 *
 */
//Gửi mail sử dụng hàm mail mặc định của PHP thuần, mặc định phải cấu hình các file setting của server thì mới gửi được
//mail('qlonga2k44@gmail.com','Tiêu đề mail','Body của mail');
//- Sử dụng thư viện mail từ bên ngoài để đỡ phải cấu hình server: PHPMailer
//- Comment lại đoạn:require 'vendor/autoload.php';
//- Nhúng 3 file PHPMailer.php, SMTP.php, Exception.php ngay trước 3 lệnh uses
require_once "src/PHPMailer.php";
require_once "src/SMTP.php";
require_once "src/Exception.php";
//- Cấu hình username/password để gửi mail thông qua Gmail
//Username: tên đăng nhập Gmail
//Password: mật khẩu ứng dụng(k phải mk gmail)
//- Cấu hình host gưi mail cho $mail->Host = smtp.gmail.com
//- Truy cập MyAccount của Google

=======
 * PHPMailer/send_mail.php
 * - Demo gửi mail thực tế với thư viện PHPMailer\
 * - Thực tế các hệ thống đều gửi mail rất nhiều: register account,
 * đặt hàng, thanh toán ...
 * - PHP có 1 hàm gửi mail: mail()
 */
// + Gửi mail sử dụng hàm mail mặc định của PHP thuần, mặc định phải
//cấu hình các file setting của server thì mới gửi đc
mail('nguyenvietmanhit@gmail.com', 'Tiêu đề mail',
    'Body của mail');
// + Nên sử dụng thư viện gửi mail từ bên ngoài để đỡ phải cấu hình
//server: PHPMailer
// + Hướng dẫn cài đặt:
// - Comment lại đoạn code: require 'vendor/autoload.php';
// - Nhúng 3 file PHPMailer.php, SMTP.php, Exception.php ngay
//trước 3 lệnh use
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';
require_once 'src/Exception.php';
// - Cấu hình username/password để gửi mail thông qua Gmail,
//truy cập Myccount Google của bạn: https://myaccount.google.com/
//-> Bảo mật -> Mật khẩu ứng dụng (Chú ý cần XÁc minh 2 bước mới
//có thể tạo đc mk ứng dụng)
// Username: tên đăng nhập Gmail
// Password: mật khẩu ứng dụng
// - Cấu hình host gửi mail cho $mail->Host = smtp.gmail.com
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
<<<<<<< HEAD

=======
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

<<<<<<< HEAD
//

=======
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4
// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
<<<<<<< HEAD
    //Thêm cấu hình để hiển thị ký tự có dấu
    $mail->CharSet = 'UTF-8';
    //Khi test để debug để xem các lỗi khi không gửi được mail
    //Khi chạy thật -> tắt debug đi SMTP::DEBUG_OFF
=======
    // - THêm cấu hình để hiển thị đc ký tự có dấu
    $mail->CharSet = 'UTF-8';
    // - Khi test để debug để xem các lỗi khi ko đc gửi mail
    // Khi chạy thật ->  tắt debug đi = SMTP::DEBUG_OFF
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
<<<<<<< HEAD
    $mail->Username   = 'qlonga2k44@gmail.com';                     // SMTP username
    $mail->Password   = 'jtgdsnrxlgajeybh';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('long@gmail.com', 'Mailer');
//    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('qlonga2k44@gmail.com');               // Name is optional
=======
    $mail->Username   = 'nguyenvietmanhit@gmail.com';                     // SMTP username
    $mail->Password   = 'kjuxzhdmlwhvlrav';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients: cấu hình người gửi/ người nhận mail
    $mail->setFrom('manh@gmail.com', 'Tôi là Mạnh');
//    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('nguyenvietmanhit@gmail.com');               // Name is optional
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

<<<<<<< HEAD
    // Attachments: Gửi 1 file đính kèm
    $mail->addAttachment('IMG_1936.HEIC');         // Add attachments
=======
    // Attachments: gửi file đính kèm
    // Copy 1 ảnh bất kỳ, đặt ngang hàng với file .php hiện tại
    // Gửi file ảnh đính kèm
    $mail->addAttachment('image.jpg');         // Add attachments
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content: Nội dung body gửi mail
    $mail->isHTML(true);                                  // Set email format to HTML
<<<<<<< HEAD
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
//    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
=======
    $mail->Subject = 'Tiêu đề mail test';
    $mail->Body    = '<h1>Body h1 gửi mail</h1>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
>>>>>>> 3a51d06a09c0136f3267b3899e3d4c5a2a7f43c4
