<?php
try{
    require_once("Controler/quizControler.php");

    $quizManager = new QuizController();

    if(isset($_GET['action'])){
        if($_GET['action'] === "quiz"); {
            
            $quizManager->postQuiz();
        }
    }
    else{
        $quizManager->Quiz();

    }

}

catch(Exception $e){
    echo "Erreur";
}