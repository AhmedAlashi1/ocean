<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\SolutionServicesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceDetails;
use App\Models\SoftwareSolutionServices;
use Illuminate\Http\Request;

class SolutionServicesController extends Controller
{
    public function index(SolutionServicesDataTable $dataTable , $id)
    {
        $service = ServiceDetails::find($id);
        return $dataTable->render('dashboard.solution_services.index' , compact('id','service'));
    }
    public function create($id)
    {
        $service = ServiceDetails::find($id);
        return view('dashboard.solution_services.create' , compact('service','id'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'desc_en' => 'required|string',
            'desc_ar' => 'required|string',
        ]);
        $service = ServiceDetails::find($request->service_details_id);
        $request['service_id'] = $service->service_id;

        SoftwareSolutionServices::create($request->all());

        return redirect()->route('SolutionServices.index' , $request->service_details_id)->with('success' , 'Service created successfully');
    }
    //edit
    public function edit($id)
    {
        $solution_service = SoftwareSolutionServices::find($id);
        return view('dashboard.solution_services.edit' , compact('solution_service'));
    }
    //update
    public function update(Request $request , $id)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'desc_en' => 'required|string',
            'desc_ar' => 'required|string',
        ]);

        $SoftwareSolutionServices = SoftwareSolutionServices::find($id);
        $service = ServiceDetails::find($request->service_details_id);
        $request['service_id'] = $service->service_id;
        $SoftwareSolutionServices->update($request->all());

        return redirect()->route('SolutionServices.index' , $service->service_details_id)->with('success' , 'Service updated successfully');
    }


    public function destroy($id)
    {
        $SoftwareSolutionServices = SoftwareSolutionServices::find($id);
        $SoftwareSolutionServices->delete();
        return response()->json('success');
    }


}
