<?php

namespace App\Http\Controllers;

use App\Http\Requests\HariRequest;
use App\Http\Resources\HariResource;
use App\Models\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{
    public function index(Hari $hari)
    {
        return HariResource::collection($hari->get());
    }
    public function store(Hari $hari,HariRequest $request)
    {
        $data = $hari->pelajaran()->create([
           'mata_pelajaran' => $request->mata_pelajaran, 
           'waktu_mulai' => $request->waktu_mulai, 
           'waktu_akhir' => $request->waktu_akhir, 
        ]);
        return response()->json([
            'message' => 'Success',
            'data' => $data
        ], 200);
    }
    public function show(Hari $hari)
    {
        return new HariResource($hari);
    }
}
