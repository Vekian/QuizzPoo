<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('class/Question.php');
    include('class/Answer.php');
    include('class/Qcm.php');
    $db = new PDO('mysql:host=127.0.0.1;dbname=QuizzPoo;charset=utf8', 'root');
    $science = new Qcm($db);
    
    $science->getQuestion();
    ?>

    <div id="quizz">
        <form action="#" method="post">
                <?php $science->generate(); ?>
            <input type="submit" value="envoyer">
        </form>
    </div>
</body>
</html>