<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ServicesDetailsDataTable;
use App\DataTables\SolutionServicesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceDetails;
use App\Models\SoftwareSolutionServices;
use Illuminate\Http\Request;

class ServicesDetailsController extends Controller
{
    public function index(ServicesDetailsDataTable $dataTable , $id)
    {
        $service = Service::find($id);
        return $dataTable->render('dashboard.services_details.index' , compact('id','service'));
    }
    public function create($id)
    {
        $service = Service::find($id);
        return view('dashboard.services_details.create' , compact('service','id'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'desc_en' => 'nullable|string',
            'desc_ar' => 'nullable|string',
        ]);

        ServiceDetails::create($request->all());

        return redirect()->route('ServiceDetails.index' , $request->service_id)->with('success' , 'Service created successfully');
    }
    //edit
    public function edit($id)
    {
        $service_details = ServiceDetails::find($id);
        return view('dashboard.services_details.edit' , compact('service_details'));
    }
    //update
    public function update(Request $request , $id)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'desc_en' => 'nullable|string',
            'desc_ar' => 'nullable|string',
        ]);

        $service = ServiceDetails::find($id);
        $service->update($request->all());

        return redirect()->route('ServiceDetails.index' , $service->service_id)->with('success' , 'Service updated successfully');
    }


    public function destroy($id)
    {
        $ServiceDetails = ServiceDetails::find($id);
        $ServiceDetails->delete();
        return response()->json('success');
    }


}
