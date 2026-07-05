<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test if the Beranda page is accessible.
     */
    public function test_beranda_page_returns_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test if the Edukasi Talak page is accessible.
     */
    public function test_edukasi_talak_page_returns_successful_response(): void
    {
        $response = $this->get('/edukasi-talak');
        $response->assertStatus(200);
    }

    /**
     * Test if the Panduan Iddah page is accessible.
     */
    public function test_panduan_iddah_page_returns_successful_response(): void
    {
        $response = $this->get('/panduan-iddah');
        $response->assertStatus(200);
    }

    /**
     * Test if the Regulasi KUA page is accessible.
     */
    public function test_alur_kua_page_returns_successful_response(): void
    {
        $response = $this->get('/alur-kua');
        $response->assertStatus(200);
    }

    /**
     * Test if the Cek Prosedur page is accessible.
     */
    public function test_cek_prosedur_page_returns_successful_response(): void
    {
        $response = $this->get('/cek-prosedur');
        $response->assertStatus(200);
    }

    /**
     * Test if the Tentang page is accessible.
     */
    public function test_tentang_page_returns_successful_response(): void
    {
        $response = $this->get('/tentang');
        $response->assertStatus(200);
    }
}
