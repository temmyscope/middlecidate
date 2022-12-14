<?php

namespace Tests\Feature\Authentication;

use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class InstitutionTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function test_existing_institute()
    {
        $response = $this->getJson('/api/institutions?institution=Access');

        //this request will return a false status due to 401 from the backend
        //unless the token validates on the backend
        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status', true)->etc()
        );
    }

    /**
     *
     * @return void
     */
    public function test_non_existing_institute()
    {
        $response = $this->getJson('/api/institutions?institution=XXX');

        //this request will return a false status due to 401 from the backend
        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status', true)
            ->where('message', fn($str) => str_contains('Not found', $str))->etc()
        );
    }
}
