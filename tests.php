<?php
//require_once 'PHPUnit/Autoload.php';
require_once('SampleTest.php');
use PHPUnit\Framework\TestCase;

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
        $this->assertEquals($Sample->helloWorld(), 'hello world!!');

    }
}
?>