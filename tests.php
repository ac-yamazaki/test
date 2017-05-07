<?php
require_once('./index.php');
use vendor\phpunit\phpunit\src\Framework\TestCase;

class SampleTest extends TestCase
{
//    public function test()
//     {
//         $Sample = new Sample();
//         $this->assertEquals($Sample->helloWorld(), 'hello world!');
//     }

    /**
     * @test
     */
   public function testIndex()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');

    }
}
?>