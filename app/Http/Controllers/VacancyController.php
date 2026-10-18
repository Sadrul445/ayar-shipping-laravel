<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Vacancy;
use Illuminate\View\View;
class VacancyController extends Controller
{
    public function index(): View
    {
        return view('vacancies.index', [
            'vacancies' => Vacancy::where('is_active', true)->latest()->paginate(10),
        ]);
    }

    public function show(Vacancy $vacancy): View
    {
        abort_unless($vacancy->is_active, 404);
        return view('vacancies.show', compact('vacancy'));
    }
}
