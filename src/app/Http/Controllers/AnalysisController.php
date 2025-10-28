<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AnalysisController extends Controller
{
    // POST /api/analyses  (recebe rascunho dos agentes)
    public function store(Request $req)
    {
        $data = $req->validate([
            'ticker' => ['required','string','max:16'],
            'price' => ['nullable','numeric'],
            'avg_50' => ['nullable','numeric'],
            'avg_200' => ['nullable','numeric'],
            'sentiment_score' => ['nullable','numeric','between:-1,1'],
            'currency' => ['nullable','string','max:8'],
            'title' => ['nullable','string'],
            'content' => ['nullable','string'],
            'sources' => ['nullable','array'],
        ]);

        $analysis = Analysis::create([
            ...$data,
            'status' => 'draft',
        ]);

        return response()->json([
            'ok' => true,
            'id' => $analysis->id,
            'status' => $analysis->status
        ], 201);
    }

    // PATCH /api/analyses/{id}/approve (humano aprova)
    public function approve($id)
    {
        $analysis = Analysis::findOrFail($id);
        if ($analysis->status !== 'draft') {
            return response()->json(['ok'=>false,'msg'=>'Somente rascunhos podem ser aprovados'], 422);
        }

        $analysis->status = 'approved';
        $analysis->approved_by = Auth::id(); // se tiver auth de usuário
        $analysis->approved_at = now();
        $analysis->save();

        return ['ok'=>true,'status'=>$analysis->status];
    }
}
