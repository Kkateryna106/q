<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>
<body>

<h2>Дякуємо за вашу відповідь!</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);     
    $email = htmlspecialchars($_POST['email']);   
    $question1 = htmlspecialchars($_POST['question1']); 
    $question2 = htmlspecialchars($_POST['question2']); 
    $question3 = htmlspecialchars($_POST['question3']); 
    $dateTime = date("Y-m-d_H-i-s");
    
    $directory = 'survey';
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true); 
    }
    $filename = $directory . "/survey_" . $dateTime . ".json";

    $surveyData = [
        "name" => $name,
        "email" => $email,
        "question1" => $question1,
        "question2" => $question2,
        "question3" => $question3,
        "submitted_at" => date("Y-m-d H:i:s")
    ];

    file_put_contents($filename, json_encode($surveyData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "<p><strong>Дата та час заповнення форми:</strong> " . date("Y-m-d H:i:s") . "</p>";
} else {
    echo "<p>Дані не надійшли.</p>";
}
?>

</body>
</html>
