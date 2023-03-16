<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Package;

class PackageTest extends TestCase
{
    /**
     * Get package list.
     *
     * @return void
     */
    public function test_get_packages()
    {
        $response = $this->get('/package');

        $response->assertStatus(200);
    }

    /**
     * Get package by id.
     *
     * @return void
     */
    public function test_get_packages_by_id()
    {
        $response = $this->get('/package/64132530169461071313ad7d');
        $responseData = $response->getData();

        $response->assertStatus(200);
        $this->assertTrue($responseData->data->_id == "64132530169461071313ad7d");
    }

    /**
     * Create package.
     *
     * @return void
     */
    public function test_create_package()
    {
        $response = $this->post('/package', [
            "customer_name" => "PT. AJI M.Z."
        ]);

        $response->assertStatus(201);
        $this->assertTrue(count(Package::all()) > 1);
    }

    /**
     * Delete package by id.
     *
     * @return void
     */
    // public function test_delete_package_by_id()
    // {
    //     $response = $this->delete('/package/64134adb5346806b1803bb02');

    //     $response->assertStatus(200);
    //     $this->assertTrue(count(Package::where("_id", "64134a3aaf2077ce190c7452")->get()) == 0);
    // }
}
