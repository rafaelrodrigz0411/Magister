<?php

namespace App\Http\Controllers;

use App\Models\DevelopmentUnit;
use Illuminate\Http\Request;

/**
 * Class DevelopmentUnitController
 * @package App\Http\Controllers
 */
class DevelopmentUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developmentUnits = DevelopmentUnit::paginate();

        return view('development-unit.index', compact('developmentUnits'))
            ->with('i', (request()->input('page', 1) - 1) * $developmentUnits->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developmentUnit = new DevelopmentUnit();
        return view('development-unit.create', compact('developmentUnit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DevelopmentUnit::$rules);

        $developmentUnit = DevelopmentUnit::create($request->all());

        return redirect()->route('development-units.index')
            ->with('success', 'DevelopmentUnit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $developmentUnit = DevelopmentUnit::find($id);

        return view('development-unit.show', compact('developmentUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $developmentUnit = DevelopmentUnit::find($id);

        return view('development-unit.edit', compact('developmentUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DevelopmentUnit $developmentUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DevelopmentUnit $developmentUnit)
    {
        request()->validate(DevelopmentUnit::$rules);

        $developmentUnit->update($request->all());

        return redirect()->route('development-units.index')
            ->with('success', 'DevelopmentUnit updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $developmentUnit = DevelopmentUnit::find($id)->delete();

        return redirect()->route('development-units.index')
            ->with('success', 'DevelopmentUnit deleted successfully');
    }
}
