<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="css/">
    <script src='main.js'></script>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // رقم واتساب الخاص بالدكتور (تأكد من وضع الرقم الصحيح)
    $whatsapp_number = "201067858023";

    // تنسيق النص المُرسل إلى واتساب
    $whatsapp_message = "مرحبًا د. حسام، أنا $name. \nرسالتي: $message";

    // رابط الواتساب مع الرسالة
    $url = "https://wa.me/$whatsapp_number?text=" . urlencode($whatsapp_message);

    // إعادة توجيه إلى الرابط
    header("Location: $url");
exit;
}
?>
</body>
</html>