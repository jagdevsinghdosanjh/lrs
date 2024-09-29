<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
</head>
<body>
    <h2>Quiz Results</h2>
    <?php
    $answers = array(
        "question1" => "c",
        "question2" => "a",
        "question3" => "a"
    );

    $score = 0;

    foreach ($answers as $question => $correct_answer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
            $score++;
        }
    }

    echo "<p>Your score is $score out of " . count($answers) . ".</p>";
    ?>
</body>
</html>
