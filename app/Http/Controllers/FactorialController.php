<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class FactorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 404,
            'message' => 'No Data Received!',
            'output' => 'Factorial of 0 is 1.',
            'help' => 'Please go to .../factorial/{number}',
        ], 404);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if($id > 0){
            return response()->json([
                'status' => 200,
                'output' => $this->recursive_factorial($id)
            ], 200);
        } else{
            return response()->json([
                'status' => 200,
                'output' => 'Factorial of 0 is 1.',
            ], 200);
        }
    }

    function recursive_factorial($int) {
        if ($int == 0) {
            return 1;
        }
        return $this->recursive_factorial($int - 1) * $int;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
