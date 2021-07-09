<!--
4_tinh_chat_oop.php
- Tính trừu tượng: liên quan đến các class abstract
- Tính đóng gói: liên quan đến phạm vi truy cập của OOP: private,
protected, public, thể hiện cho sự che giấu thông tin trong OOP
- Tính kế thừa: liên quan đến từ khóa extends, thể hiện cho sự
kế thừa
- Tính đa hình: liên quan đến interface
-->

<?php
abstract class Person {
    abstract public function getName();

}
interface Config{
    public function sendMail();
    public function getMail();
}
class A implements Config{
    public function sendMail()
    {
        // TODO: Implement sendMail() method.
    }
}
?>