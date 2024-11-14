<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Анкета опитування</title>
</head>
<body>
<h2>Анкета опитування</h2>
<form action="form.php" method="POST">

    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    
    <label>1. Яку літературу ви більше любите читати?</label><br>
    <input type="radio" id="q1_1" name="question1" value="Художню літературу" required>
    <label for="q1_1">Художню літературу</label><br>
    <input type="radio" id="q1_2" name="question1" value="Наукову літературу">
    <label for="q1_2">Наукову літературу</label><br>
    <input type="radio" id="q1_3" name="question1" value="Біснес-літературу">
    <label for="q1_3">Бізнес-літературу</label><br>
    <input type="radio" id="q1_4" name="question1" value="Література про дозвілля">
    <label for="q1_4">Література про дозвілля</label><br><br>

    
    <label>2. Якому жанру літератури ви надаєте перевагу?</label><br>
    <input type="radio" id="q2_1" name="question2" value="Романтика" required>
    <label for="q2_1">Романтика</label><br>
    <input type="radio" id="q2_2" name="question2" value="Психологія">
    <label for="q2_2">Психологія</label><br>
    <input type="radio" id="q2_3" name="question2" value="Трилери">
    <label for="q2_3">Трилери</label><br>
    <input type="radio" id="q2_4" name="question2" value="Детективи">
    <label for="q2_4">Детективи</label><br><br>

    <label>3. В якому форматі вам більше імпонує читати книги?</label><br>
    <input type="radio" id="q3_1" name="question3" value="В електронному форматі" required>
    <label for="q3_1">В електронному форматі</label><br>
    <input type="radio" id="q3_2" name="question3" value="В друкованому форматі">
    <label for="q3_2">В друкованому форматі</label><br>


    <button type="submit">Надіслати анкету</button>
</form>

</body>
</html>
