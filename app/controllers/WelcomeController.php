<?php

class WelcomeController extends BaseController
{
    public function sayHello()
    {
    return View::make('Welcome/sayHello');
    }

}

