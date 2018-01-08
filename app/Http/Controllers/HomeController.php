<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        return view('admin.templates.home');
    }


    // for template reference
    public function templateEmail()
    {
        return view('admin.templates.email');
    }

    public function templateCompose()
    {
        return view('admin.templates.compose');
    }

    public function templateCalendar()
    {
        return view('admin.templates.calendar');
    }

    public function templateChat()
    {
        return view('admin.templates.chat');
    }

    public function templateChart()
    {
        return view('admin.templates.chart');
    }

    public function templateForm()
    {
        return view('admin.templates.form');
    }

    public function templateElement()
    {
        return view('admin.templates.element');
    }

    public function templateBasicTable()
    {
        return view('admin.templates.basictable');
    }

    public function templateDataTable()
    {
        return view('admin.templates.datatable');
    }

    public function templateGoogleMap()
    {
        return view('admin.templates.googlemaps');
    }

    public function templateVectorMap()
    {
        return view('admin.templates.vectormaps');
    }




}
