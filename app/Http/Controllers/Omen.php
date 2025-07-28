<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Omen extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = [
            ['apalah' => 'Hadi', 'kelas' => ' x2'],
            ['apalah' => 'aoddi ', 'kelas' => ' x3'],
            ['apalah' => 'faiz', 'kelas' => ' x1'],
            ['apalah' => 'entah ', 'kelas' => ' x4'],
            ['apalah' => 'bima ', 'kelas' => ' x7'],
            ['apalah' => 'au ah ', 'kelas' => ' xi 11'],
            ['apalah' => 'hello ', 'kelas' => ' x rpl 1'],
            ['apalah' => 'bim ', 'kelas' => ' x rpl 4'],
            ['apalah' => 'p ', 'kelas' => ' x5'],
        ];
        return view(
            'home',
            [
                'title' => 'Belajar Laravel',
            ],
            compact('siswa')
        );
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
        //
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
