<?php
namespace App\Http\Controllers;
use App\Models\CrewApplication;
use App\Models\Vacancy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rules\File;
class ApplicationController extends Controller
{
    public function create(): View
    {
        return view('applications.create', [
            'vacancies' => Vacancy::where('is_active', true)->orderBy('title')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:190'],
            'phone' => ['required', 'string', 'max:40'],
            'nationality' => ['nullable', 'string', 'max:100'],
            'position' => ['required', 'string', 'max:120'],
            'vacancy_id' => ['nullable', 'integer', 'exists:vacancies,id'],
            'experience_years' => ['nullable', 'integer', 'min:0', 'max:60'],
            'message' => ['nullable', 'string', 'max:3000'],
            'cv' => ['required', File::types(['pdf'])->max(5 * 1024)],
            'certificates' => ['nullable', 'array', 'max:5'],
            'certificates.*' => ['file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
            'consent' => ['accepted'],
        ]);
        $cvPath = $request->file('cv')->store('applications/cv', 'local');
        $certificatePaths = [];
        foreach ($request->file('certificates', []) as $file) {
            $certificatePaths[] = $file->store('applications/certificates', 'local');
        }
        CrewApplication::create([
            'vacancy_id' => $validated['vacancy_id'] ?? null,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'nationality' => $validated['nationality'] ?? null,
            'position' => $validated['position'],
            'experience_years' => $validated['experience_years'] ?? null,
            'message' => $validated['message'] ?? null,
            'cv_path' => $cvPath,
            'certificates' => $certificatePaths ?: null,
            'status' => 'pending',
        ]);
        return redirect()->route('applications.create')->with('success', 'Your application has been received. Our recruitment team will review it.');
    }
}
