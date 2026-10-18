<?php
namespace App\Http\Controllers;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ContactController extends Controller
{
    public function show(): View { return view('contact'); }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:190'],
            'phone' => ['nullable', 'string', 'max:40'],
            'subject' => ['nullable', 'string', 'max:190'],
            'message' => ['required', 'string', 'max:5000'],
        ]);
        Enquiry::create($validated);
        return back()->with('success', 'Thank you. Your enquiry has been submitted successfully.');
    }
}
