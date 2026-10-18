<?php
namespace Tests\Feature;
use Tests\TestCase;
class HomePageTest extends TestCase
{
    public function test_home_page_loads(): void
    {
        $this->get('/')->assertOk()->assertSee('Ayar Shipping Services')->assertSee('What we do');
    }
    public function test_contact_page_loads(): void
    {
        $this->get('/contact')->assertOk()->assertSee('Contact us');
    }
    public function test_application_page_loads(): void
    {
        $this->get('/apply')->assertOk()->assertSee('Crew job application');
    }
}
