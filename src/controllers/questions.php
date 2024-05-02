<?php

class Questions
{
    public function index()
    {
        require "src/models/question.php";

        $model = new Question;

        $questions = $model->getData();

        require "views/questions_index.php";
    }

    public function show()
    {
        require "views/questions_show.php";
    }
}
