<?php
namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\View\View;
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'vacancies' => Vacancy::where('is_active', true)->latest()->take(3)->get(),
        ]);
    }
}
