<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استبيان الصحة النفسية</title>
    <link rel="stylesheet"  href="question.css">

</head><script>
function redirectToNextPage(message) {
// عرض الرسالة
alert(message);
// الانتقال إلى الصفحة التالية بعد 3 ثوانٍ
setTimeout(function() {
window.location.href = "one.php"; // استبدل "next_page.php" باسم الصفحة التالية
}, 3000);
}
</script>

<body>
    <div class="container">
        <h1> استبيان الصحة النفسية</h1>
        <form action=""  method="post">
        <div class="question">
        <label> هل تشعر بالحزن في معظم الاوقات</label><br><br>
        <input type="radio" name="q1" value="نعم">نعم<br><br>
        <input type="radio" name="q1" value="لا"> لا<br><br>
    </div>
    <div class="question">
        <label> هل لديك صعوبة في النوم</label><br><br>
        <input type="radio" name="q2" value="نعم"> نعم<br><br>
        <input type="radio" name="q2" value="لا"> لا<br><br>
    </div>
    <div class="question">
        <label> هل تشعر بالقلق الدائم</label><br><br>
        <input type="radio" name="q3"  value="نعم"> نعم<br><br>
        <input type="radio" name="q3"  value="لا">لا<br><br>
    </div>
    <div class="question">
        <label> هل تشعر بالخوف الدائم</label><br><br>
        <input type="radio" name="q4" value="نعم"> نعم<br><br>
        <input type="radio" name="q4" value="لا"> لا<br><br>
    </div>
    <button type="submit"> تقييم</button>
        </form>
    </div>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$score = 0;

if (isset($_POST['q1']) && $_POST['q1'] === "نعم") {
$score++;
}
if (isset($_POST['q2']) && $_POST['q2'] === "نعم") {
$score++;
}
if (isset($_POST['q3']) && $_POST['q3'] === "نعم") {
    $score++;
    }
    if (isset($_POST['q4']) && $_POST['q4'] === "نعم") {
        $score++;
        }

// تقييم النتيجة
if ($score === 0) {
$message = "لقد تم تقييمك: انت غير مريض نفسي.";
} elseif ($score === 1) {
$message = "لقد تم تقييمك: قد تحتاج إلى بعض الدعم.";
} else {
    $message = "لقد تم تقييمك: من الممكن أنك تعاني من مشاكل نفسية.";
}
echo "<script>redirectToNextPage('$message');</script>";
}
?>
</body>
</html>
