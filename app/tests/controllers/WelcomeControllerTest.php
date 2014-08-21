class WelcomeControllerTest extends BaseController
{
public function sayHello()
{

return View::make('Welcome.sayHello');
->with(array('hi'=> ' ||How are you || ',
'anExampleArraykey' => '||Hell||'
));
}

}