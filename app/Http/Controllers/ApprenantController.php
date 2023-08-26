<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('apprenant.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apprenant.create');
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
    public function show(Apprenant $apprenant)
    {
        return view('apprenant.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprenant $apprenant, User $user)
    {
        $user = User::all();
       return view('apprenant.edit', compact('user')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apprenant $apprenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprenant $apprenant)
    {
        //
    }
}
