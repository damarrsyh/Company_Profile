<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("branch.index", ['branches' => Branch::with(['outstanding', 'repayment', 'par'])->get()]);
    }

    public function aindex()
    {
        return view("branch.aindex", ['branches' => Branch::with(['outstanding', 'repayment', 'par'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch_data = $request->validate([
            'name' => ['required'],
            'total_member' => ['required'],
            'outstanding' => ['required'],
            'par' => ['required']
        ]);

        Branch::create($branch_data);
        return redirect('/branch/aindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("branch.show", [
            'branch' => Branch::with(['outstanding', 'repayment', 'par'])->where("id", $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("branch.edit", [
            "branch" => Branch::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $branch_data = $request->validate([
            'name' => ['required'],
            'total_member' => ['required'],
            'outstanding' => ['required'],
            'par' => ['required']
        ]);

        Branch::where("id", $id)->update($branch_data);
        return redirect('/branch/aindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Branch::destroy($id);
        return redirect('/branch/aindex');
    }
}
