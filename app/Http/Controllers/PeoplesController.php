<?php

namespace App\Http\Controllers;

use App\Models\Peoples;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function industries()
    {
        return view('industries');
    }
    public function contact()
    {
        return view('contact');
    }
    public function service()
    {
        return view('service');
    }
    public function workday()
    {
        return view('workday');
    }
    public function salesforce()
    {
        return view('salesforce');
    }
    public function peoplesoft()
    {
        return view('peoplesoft');
    }
    public function mulesoft()
    {
        return view('mulesoft');
    }
    public function ukgkronos()
    {
        return view('ukgkronos');
    }
    public function uipath()
    {
        return view('uipath');
    }
    public function clouddata()
    {
        return view('clouddata');
    }
    public function infrastructure()
    {
        return view('infrastructure');
    }
    public function migration()
    {
        return view('migration');
    }
    public function modernization()
    {
        return view('modernization');
    }
    public function analytics()
    {
        return view('analytics');
    }
    public function ai()
    {
        return view('ai');
    }
    public function aienablement()
    {
        return view('aienablement');
    }
    public function iot()
    {
        return view('iot');
    }
    public function humanmachineinterface()
    {
        return view('humanmachineinterface');
    }
    
    public function ux()
    {
        return view('ux');
    }
    
    public function mvpdevelopment()
    {
        return view('mvpdevelopment');
    }
    
    public function accessibility()
    {
        return view('accessibility');
    }
    
    public function qaandvalidation()
    {
        return view('qaandvalidation');
    }
    
    public function mobile()
    {
        return view('mobile');
    }
    public function datacenters()
    {
        return view('datacenters');
    }
    
    public function applicationdevelopment()
    {
        return view('applicationdevelopment');
    }
    
    public function cloudservices()
    {
        return view('cloudservices');
    }
    
    public function dataplatform()
    {
        return view('dataplatform');
    }
    
    public function security()
    {
        return view('security');
    }
    
    public function bigdata()
    {
        return view('bigdata');
    }
    
    public function machinelearning()
    {
        return view('machinelearning');
    }
    
    public function cloudmigration()
    {
        return view('cloudmigration');
    }
    
    public function devopsautomation()
    {
        return view('devopsautomation');
    }
    
    public function databasemigration()
    {
        return view('databasemigration');
    }
    
    public function dataanalytics()
    {
        return view('dataanalytics');
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
    public function show(Peoples $peoples)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peoples $peoples)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peoples $peoples)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peoples $peoples)
    {
        //
    }
}
