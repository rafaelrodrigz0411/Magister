<?php

namespace App\Http\Controllers;

use App\Models\Bulding;
use Illuminate\Http\Request;

/**
 * Class BuldingController
 * @package App\Http\Controllers
 */
class BuldingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buldings = Bulding::paginate();

        return view('bulding.index', compact('buldings'))
            ->with('i', (request()->input('page', 1) - 1) * $buldings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bulding = new Bulding();
        return view('bulding.create', compact('bulding'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bulding::$rules);

        $bulding = Bulding::create($request->all());

        return redirect()->route('buldings.index')
            ->with('success', 'Bulding created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulding = Bulding::find($id);

        return view('bulding.show', compact('bulding'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulding = Bulding::find($id);

        return view('bulding.edit', compact('bulding'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bulding $bulding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bulding $bulding)
    {
        request()->validate(Bulding::$rules);

        $bulding->update($request->all());

        return redirect()->route('buldings.index')
            ->with('success', 'Bulding updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bulding = Bulding::find($id)->delete();

        return redirect()->route('buldings.index')
            ->with('success', 'Bulding deleted successfully');
    }
}
