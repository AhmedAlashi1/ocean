<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ServicesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Traits\ImageTrait;

class ServiceController extends Controller
{

    use ImageTrait;

    public function index(ServicesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.services.index');
    }

    public function create()
    {
        return view('dashboard.services.create');
    }


    public function store(ServiceRequest $request)
    {
        try {
            if ($request->has('photo')) {
                $image_path = $this->uploadImage('admin', $request->photo);
            }

            if ($request->has('photo2')) {
                $image_path2 = $this->uploadImage('admin', $request->photo2);
            }
            Service::create([
                'name_en' => $request->input('name'),
                'name_ar' => $request->input('name_ar'),
                'desc_en' => $request->input('desc'),
                'desc_ar' => $request->input('desc_ar'),
                'is_home' => $request->input('is_home') ?? 0,
                'is_home_work' => $request->input('is_home_work') ?? 0, // '0' => 'No', '1' => 'Yes
                'image' => $image_path ?? null,
                'title_ar' => $request->input('title_ar'),
                'title_en' => $request->input('title_en'),
                'content_ar' => $request->input('content_ar'),
                'content_en' => $request->input('content_en'),
                'image2' => $image_path2 ?? null,

            ]);

            session()->flash('success', __('messages.created successfully.'));
            return redirect()->route('services.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.An error occurred while creating the service. Please try again.'));
            return redirect()->route('services.create');
        }
    }

    public function edit($id)
    {
        try {
            $service = Service::find($id);
            if (!$service) {
                session()->flash('error', __('messages.The service is not exist'));
                return redirect()->route('services.index');
            }
            return view('dashboard.services.edit',compact('service'));
        }catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('services.index');
        }
    }


    public function update(ServiceRequest $request, $id)
    {
//        return $request->all();
        try {
            $service = Service::findorfail($id);
            if ($request->has('photo')) {
                $image_path = $this->uploadImage('admin', $request->photo);
            }
            if ($request->has('photo2')) {
                $image_path2 = $this->uploadImage('admin', $request->photo2);
            }
            if ($request->is_home != '0'){
                $services = Service::where('is_home',$request->is_home)->first();
                if ($services){
                    $services->update([
                        'is_home' => 0,
                    ]);
                }
                $is_home = $request->is_home;
            }
            //is_home_work
            if ($request->is_home_work != '0'){
                $services = Service::where('is_home_work',$request->is_home_work)->first();
                if ($services){
                    $services->update([
                        'is_home_work' => 0,
                    ]);
                }
                $is_home_work = $request->is_home_work;
            }

            $service->update([
                'name_en' => $request->input('name'),
                'name_ar' => $request->input('name_ar'),
                'title_ar' => $request->input('title_ar'),
                'title_en' => $request->input('title_en'),
                'content_ar' => $request->input('content_ar'),
                'content_en' => $request->input('content_en'),
                'desc_en' => $request->input('desc'),
                'desc_ar' => $request->input('desc_ar'),
                'is_home_work' => $is_home_work ?? '0', // '0' => 'No', '1' => 'Yes
                'is_home' => $is_home ?? '0',
                'image' => $image_path ?? $service->image,
                'image2' => $image_path2 ?? $service->image2,


            ]);
            session()->flash('success', __('messages.updated successfully.'));
            return redirect()->route('services.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.here was an error try again'));
            return redirect()->route('services.edit', $id);
        }
    }


    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json('success');
    }

}
