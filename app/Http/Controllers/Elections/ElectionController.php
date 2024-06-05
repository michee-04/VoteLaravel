<?php

namespace App\Http\Controllers\Elections;

use App\Http\Controllers\Controller;
use App\Models\Elections;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ElectionsController extends Controller
{

     public function createElection(Request $request): JsonResponse
     {
        $request->validate([
          'electionPicture' => ['required', 'string'],
          'electionName' => ['required', 'string', 'min:8'],
          'startDate' => ['required', 'date'],
          'endDate' => ['required', 'date'],
        ]);

        $election = Elections::create([
          'electionPicture' => $request->electionPicture,
          'electionName' => $request->electionName,
          'startDate' => $request->startDate,
          'endDate' => $request->endDate,
      ]);

      return response()->json(['message' => 'Creation de election avec succes.'], 201);
     }

     public function getElection(): JsonResponse
    {
        $elections = Elections::all();

        return response()->json($elections);
    }
    
}
