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
        require_once("View/quizViewPost.php");

    }
}