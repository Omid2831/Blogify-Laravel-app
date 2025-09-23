<?php

namespace App\Http\Controllers;

use App\Models\PageModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            'title' => 'Web Page'
        ];
        return view('/page', $data);
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
    public function show(PageModel $pageModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PageModel $pageModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PageModel $pageModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageModel $pageModel)
    {
        //
    }
}
