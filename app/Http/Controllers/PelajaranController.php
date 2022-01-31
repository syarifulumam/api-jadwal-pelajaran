<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelajaranRequest;
use App\Http\Resources\PelajaranResource;
use App\Models\Hari;
use App\Models\Pelajaran;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function show(Pelajaran $pelajaran)
    {   
        return new PelajaranResource($pelajaran);
    }
    public function update(Pelajaran $pelajaran,PelajaranRequest $request)
    {
        $pelajaran->update($request->all());
        $data = new PelajaranResource($pelajaran);
        return response()->json([
            'message' => 'Success',
            'data' => $data
        ], 200);
    }
    public function destroy(Pelajaran $pelajaran)
    {
        $pelajaran->hari()->detach();
        $pelajaran->delete();
        return response()->json([
            'message' => 'success'

        ], 200);;
    }
}
