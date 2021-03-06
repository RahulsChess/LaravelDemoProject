<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{

    
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('first_name','shubham')
                    ->type('last_name','pune')
                    ->type('email','swara1@gmail.com')
                    ->type('password','12345678')
                    ->type('confirm_password','12345678')
                    ->press('Create')
                    ->assertPathIs('/login');

                   

                });
    }
}
