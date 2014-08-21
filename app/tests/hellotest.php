<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/18/14
 * Time: 3:24 PM
 */
class WelcomeControllerTest extends TestCase {

    public function testLoadingWelcomeSayHello()
    {
        $this->call('GET','Welcome/sayHello');
        $this->assertResponseOk();
    }

    public function testHello()
    {
        $this->call('GET','Welcome/sayHello');
        $this->assertViewHas('anExampleArraykey');
    }

   /* public function testMessage()
    {
        $this->call('GET','Welcome/sayHello');
        $this->assertViewHas('anExampleArraykey');
    }
*/
}