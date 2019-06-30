<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

use PHPUnit\Framework\TestCase;

class Caltest extends TestCase
{
    public function testCal()
    {
        $stub = $this->getMockBuilder('Cal')
                ->setMethods(array('respond'))
                ->getMock();
        $stub->method('respond')
              ->willReturn('code 200');
        $this->assertEquals('code 200', $stub->respond());
    }
}
// require('../libs/nusoap/lib/nusoap.php');
// $server = new nusoap_server();
// $server->configureWSDL('Cal', 'urn:travels');
// $server->register(
//     "Cal.repsond",
//     array('data' => 'xsd:string'),
//     'urn:travels',
//     'urn:travels#Cal'
// );
// $server->service(file_get_contents("php://input"));
