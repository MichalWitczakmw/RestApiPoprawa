<?php

namespace App\Http\Controllers;

use App\Models\PEOPLE;
use App\Http\Requests\StorePEOPLERequest;
use App\Http\Requests\UpdatePEOPLERequest;

class PEOPLEController extends Controller
{
    public function index()
    {
        return PEOPLE::all();
    }
    public function create(Request $request)
    {
        return PEOPLE::create($request->all());
    }
    public function show(PEOPLE $id)
    {
        return PEOPLE::find($id);
    }
    public function update(UpdatePEOPLERequest $request, PEOPLE $id, $PEOPLE)
    {
        $PEOPLE= PEOPLE::find($id);
        $PEOPLE=update($request->all());
        return $PEOPLE;
    }
    public function delete(PEOPLE $id)
    {
        return PEOPLE::deleted($id);
    }
}
