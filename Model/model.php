<?php

class QuizManager{

    public function getData(){
        
        $dataJson = file_get_contents("Model/quizz.json");
        $parsed_Data = json_decode($dataJson);

        return $parsed_Data;
    }

}