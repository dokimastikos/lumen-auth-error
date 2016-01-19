<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(App\User::class)->create();

        $this->get('/', [
            'api_token' => $user->api_token.'--'
        ]);

        $this->assertEquals(
            $this->response->getContent(), $this->app->version()
        );
    }
}
