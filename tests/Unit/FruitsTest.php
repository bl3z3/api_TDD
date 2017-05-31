<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FruitsTest extends TestCase
{
	use DatabaseMigrations;

	/**
	 * @test
	 *
	 * Test: GET /api.
	 */

	public function it_praises_the_fruits()
	{
		$response = $this->json('GET','/api');

		$response->assertStatus(200)
			->assertExactJson([
				'Fruits' => 'Delicious and healthy!'
			]);
	}
	
    /**
     * @test
     *
     * Test: GET /api/fruits/.
     */

    public function it_fetches_fruits()
    {
        $this->seed('FruitsTableSeeder');

        $this->get('api/fruits')
        	->assertStatus(200)
        	->assertJsonStructure([
        		'data' => [
        			'*' => [
        				'name',
        				'color',
        				'weight',
        				'delicious'
        			]
        		]
        	]);
    }

    /**
     * @test
     *
     * Testt: GET /api/fruit/1
     */

    public function it_fetches_a_single_fruit()
    {
    	$this->seed('FruitsTableSeeder');

    	$this->get('/api/fruit/1')
    		->assertStatus(200)
    		->assertJsonStructure([
    			'data' => [
    				'id',		
    				'name',
    				'color',
    				'weight',
    				'delicious'
        		]
        	]);
    }

    /**
     * @test
     *
     * Test: GET /api/authenticate
     */

    public function it_authenticate_a_user()
    {
        $user = factory(\App\User::class)->create(['password' => bcrypt('foo')]);

        $this->post('/api/authenticate', ['email' => $user->email, 'password' => 'foo'])
            ->assertJsonFragment(['token']);
    }

    /**
     * @test
     * 
     * Test: POST /api/fruits.
     */

    public function it_saves_a_fruit()
    {
        $user = factory(\App\User::class)->create(['password' => bcrypt('foo')]);

        $fruit = ['name' => 'peache', 'color' => 'peache', 'weight' => 176, 'delicious' => false];

        $this->post('api/fruits', $fruit, $this->headers($user))->assertStatus(201);
    }
}
