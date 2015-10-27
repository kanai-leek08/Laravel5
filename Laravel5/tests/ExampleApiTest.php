<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleApiTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testApiExample()
    {
      $response = $this->call('GET', '/api/test');
      $this->assertEquals(200, $response->getStatusCode());
      $obj = $response->getData();
      $this->assertEquals("NG",$obj->status);
      $this->assertEquals("No problem",$obj->message);
    }
}
