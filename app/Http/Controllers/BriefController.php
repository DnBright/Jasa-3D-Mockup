<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brief;

class BriefController extends Controller
{
    /**
     * Store a newly created brief submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $brief = Brief::create([
            'name' => $validated['name'],
            'contact' => $validated['contact'],
            'description' => $validated['description'],
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Brief terkirim! Spesialis 3D kami akan menghubungi Anda.',
            'data' => $brief
        ]);
    }

    /**
     * Update the status of a brief.
     */
    public function updateStatus(Request $request, Brief $brief)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,contacted,completed',
        ]);

        $brief->update([
            'status' => $validated['status'],
        ]);

        return back()->with('success', 'Status brief berhasil diperbarui.');
    }

    /**
     * Display the admin dashboard with briefs data and stats.
     */
    public function dashboard()
    {
        $briefs = Brief::latest()->get();

        $stats = [
            'total' => $briefs->count(),
            'pending' => $briefs->where('status', 'pending')->count(),
            'contacted' => $briefs->where('status', 'contacted')->count(),
            'completed' => $briefs->where('status', 'completed')->count(),
        ];

        return view('dashboard', compact('briefs', 'stats'));
    }
}
