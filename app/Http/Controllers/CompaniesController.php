<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Companies::query();
        if ($request->has('q') && $request->q) {
            $query->where('name', 'like', "%$request->q%");
            $query->orWhere('phone', 'like', "%$request->q%");
            $query->orWhere('district', 'like', "%$request->q%");
        }
        $companies = $query->paginate(10);

        return view('supplier.index', [
            'companies' => $companies,
            'term' => $request->q
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = new Companies();

        return view('supplier.create', [
            'companies' => $companies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required',
            'website' => 'required'
        ]);
        $companies = new Companies();
        $companies->fill($request->all());
        $companies->save();
        $companies->fresh();

        return redirect()->route('suppliers.index')->with('success', 'Company created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Companies $companies
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        return view('supplier.show', [
            'companies' => $companies,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Companies $companies
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $companies)
    {
        return view('supplier.edit', [
            'company' => $companies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Companies           $companies
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companies $companies)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required',
            'website' => 'required'
        ]);
        $companies->fill($request->all());
        $companies->save();
        $companies->fresh();

        return redirect()->route('suppliers.index')->with('success', 'Company updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Companies $companies
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        $companies->delete();

        return redirect()->route('suppliers.index', $companies->id)->with(
            ['success' => 'Company Deleted Successfully', $companies->name]
         );
    }

}
