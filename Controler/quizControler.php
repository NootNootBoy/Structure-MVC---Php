<?php
require_once "Model/model.php";

    class QuizController{

        private $quizManager;
        private $quizData;

    public function __construct()
    {
            $this->quizManager = new QuizManager();
            $this->quizData = $this->quizManager->getData();
        }

    public function Quiz(){
        
        require_once("View/quizView.php");
    }

     public function postQuiz()    {
        $points = 0;
        $questionNumber = sizeof($_POST);

        foreach ($_POST as $reponse => $reponse_value) {
            list($category, $question) = explode("/", $reponse);
            $goodreponse = $this->quizData->{'quiz'}->$category->$question->{'answer'};

            if ($reponse_value == $goodreponse  ) {
                $points++;
            } else {
                $points--;
            }
        }

        if ($points < $questionNumber) {
            require("View/quiViewPostN.php");
        } else {
            require("View/quizViewPost.php");
        }

    }
}