<?php

class StudentController extends BaseController
{
    public function sayHi()
    {
        return View::make('Student/sayHi')->withName('Jui');
    }
} 