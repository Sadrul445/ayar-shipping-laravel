<?php
use Illuminate\Support\Facades\Artisan;
Artisan::command('about:ayar', function () {
    $this->comment('Ayar Shipping Services — Crew Recruitment');
})->purpose('Display project-specific information');
