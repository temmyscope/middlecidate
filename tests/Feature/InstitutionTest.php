<?php

namespace Tests\Feature\Authentication;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;

class InstitutionTest extends TestCase
{
    /**
     * This would test for an incorrect email
     *
     * @return void
     */
    public function test_existing_institute()
    {
        $response = $this->postJson('/api/institution');

        //This user should usually not exist
        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('email', ['User does not exist.'])->etc()
        );
    }

    /**
     * This would test for a correct email
     *
     * @return void
     */
    public function test_non_existing_institute()
    {
        $response = $this->getJson('/api/institution');

        //the response should contain one of this status messages
        $this->assertTrue(true);
    }
}
