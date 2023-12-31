<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Http\Requests\JenisRequest;
use Exception;
use PDOException;


class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Jenis::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = Jenis::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jeni)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jeni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisRequest $request, Jenis $jeni)
    {
        try {
            $validated  = $request->validated();
            $data = $jeni->update($validated);
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data', 'error_type' => $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jeni)
    {
        try {
            $data = $jeni->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}