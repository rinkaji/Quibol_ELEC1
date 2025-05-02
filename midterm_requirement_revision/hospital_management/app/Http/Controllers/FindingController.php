<?php

namespace App\Http\Controllers;

use App\Models\finding;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class FindingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function list($id)
    {
        $findings = finding::all()->where('patient_id', $id);
        return view('findings.index', compact('id', 'findings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('findings.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
            'findings_by' => 'required|string',
        ]);

        finding::create([
            'content' => $request->content,
            'findings_by' => $request->findings_by,
            'patient_id' => $id,
        ]);

        return redirect()->route('findings.list', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(finding $finding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $findingId)
    {
        $finding = finding::where('id', $findingId)
            ->where('patient_id', $id)
            ->firstOrFail();
        return view('findings.edit', compact('finding'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, $findingId)
    {
        $request->validate([
            'content' => 'required|string',
            'findings_by' => 'required|string',
        ]);

        $finding = finding::where('id', $findingId)->where('patient_id', $id)->firstOrFail();
        $finding->update([
            'findings_by' => $request->findings_by,
            'content' => $request->content,
        ]);
        return redirect()->route('findings.list', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $findingId)
    {
        $finding = finding::findOrFail($findingId);
        $finding->delete();
        return redirect()->route('findings.list', ['id' => $id]);
    }
}
