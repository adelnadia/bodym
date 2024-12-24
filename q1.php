<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تقييم نفسي</title>
<style>
body {
font-family: Arial, sans-serif;
margin: 20px;
}
.result {
margin-top: 20px;
font-weight: bold;
}
</style>
</head>
<body>

<h2>تقييم نفسي</h2>

<form method="POST" action="">
<label>سؤال 1: هل تشعر بالحزن في معظم الأوقات؟</label><br>
<input type="radio" name="q1" value="نعم"> نعم<br>
<input type="radio" name="q1" value="لا"> لا<br><br>

<label>سؤال 2: هل لديك صعوبة في النوم؟</label><br>
<input type="radio" name="q2" value="نعم"> نعم<br>
<input type="radio" name="q2" value="لا"> لا<br><br>
<button type="submit">تقييم</button>
</form>

<div class="result">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$score = 0;

if (isset($_POST['q1']) && $_POST['q1'] === "نعم") {
$score++;
}
if (isset($_POST['q2']) && $_POST['q2'] === "نعم") {
$score++;
}

// تقييم النتيجة
if ($score === 0) {
echo "لقد تم تقييمك: أنت غير مريض نفسي.";
} elseif ($score === 1) {
echo "لقد تم تقييمك: قد تحتاج إلى بعض الدعم.";
} else {
echo "لقد تم تقييمك: من الممكن أنك تعاني من مشاكل نفسية.";
}
}
?>
</div>

</body>
</html>

