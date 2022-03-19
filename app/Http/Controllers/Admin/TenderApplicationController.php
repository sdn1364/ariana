<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tenders\Tender;
use App\Models\tenders\TenderApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenderApplicationController extends Controller
{

    public function index()
    {
        $tenders = Tender::all();
        return view('admin.tender-applications.index', compact('tenders'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tender = Tender::find($id);
        $applications = TenderApplication::where('tender_id', $id)->get();
        return view('admin.tender-applications.show', compact(['tender','applications']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TenderApplication $tenderApplication)
    {
        $tender = Tender::find($tenderApplication->tender_id);
        return view('admin.tender-applications.edit', compact(['tenderApplication', 'tender']));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download()
    {
        $file = request('file');
        return Storage::download($file);
    }
}
