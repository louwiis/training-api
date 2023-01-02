<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingHasParticipant;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::with('participants')->get();

        return response()->json($trainings);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'maxParticipants' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $training = Training::create($request->all());

        return response()->json($training);
    }

    public function addParticipant(Request $request, $idTraining)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'company' => 'nullable',
        ]);

        $training = Training::find($idTraining);

        if (!$training) {
            return response()->json(['message' => 'Training not found'], 404);
        }

        $req = [
            'training_id' => $idTraining,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'company' => $request->company,
        ];

        $participant = TrainingHasParticipant::create($req);

        $training->participants()->save($participant);

        return response()->json($participant);
    }
}
