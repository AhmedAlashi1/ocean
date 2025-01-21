<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\WorksDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Http\Requests\WorkUpdateRequest;
use App\Models\Image;
use App\Models\Service;
use App\Models\Work;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    use ImageTrait;

    public function index(WorksDataTable $dataTable)
    {
        return $dataTable->render('dashboard.works.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.works.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        try {
            DB::beginTransaction();
            $work = Work::create([
                'title_en' => $request->input('title'),
                'title_ar' => $request->input('title_ar'),
                'service_id' => $request->input('service_id'),
                'is_contact_us' => $request->input('is_contact_us'),
                'status' => $request->input('status'),
            ]);
            $photos = $request->photos;
            foreach ($photos as $photo) {
                $image_path = $this->uploadImage('admin', $photo);
                Image::create([
                    'work_id'=>$work->id,
                    'image'=>$image_path,
                ]);
            }
            DB::commit();
            session()->flash('success', __('messages.created successfully.'));
            return redirect()->route('work.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.An error occurred while creating the work. Please try again.'));
            return redirect()->route('work.create');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('dashboard.works.workImages',compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $work = Work::find($id);
            $services = Service::all();
            if (!$work) {
                session()->flash('error', __('messages.The work is not exist'));
                return redirect()->route('work.index');
            }
            return view('dashboard.works.edit',compact('work','services'));
        }catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('work.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkUpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $work = Work::findorfail($id);
            $work->update([
                'title_en' => $request->input('title'),
                'title_ar' => $request->input('title_ar'),
                'service_id' => $request->input('service_id'),
                'is_contact_us' => $request->input('is_contact_us'),
                'status' => $request->input('status'),
            ]);
            if ($request->has('photos')) {
                $photos = $request->photos;
                Image::where('work_id',$work->id)->delete();
                foreach ($photos as $photo) {
                    $image_path = $this->uploadImage('admin', $photo);
                    Image::create([
                        'work_id'=>$work->id,
                        'image'=>$image_path,
                    ]);
                }
            }

            DB::commit();
            session()->flash('success', __('messages.updated successfully.'));
            return redirect()->route('work.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.An error occurred while updating the work. Please try again.'));
            return redirect()->route('work.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        Image::where('work_id',$work->id)->delete();
        $work->delete();
        return response()->json('success');
    }

    public function updateStatus($id)
    {
        try {
            $work = Work::findOrFail($id);
            $work->status =$work->status == '1' ? '0' : '1';
            $work->save();

            return response()->json(['message' => 'Status updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }


    public function updateContactUs($id)
    {
        $work = Work::find($id);
        if($work){
            $is_contact_us = $work->is_contact_us == '1' ? '0' : '1';
            $work->update(['is_contact_us' => $is_contact_us]);
            return response()->json('update success');
        }
        return response()->json('update error');
    }

    public function AddNewImage($id,Request $request){
        if ($request->has('photos')) {
            $photos = $request->photos;
            $work = Work::findorfail($id);
            foreach ($photos as $photo) {
                $image_path = $this->uploadImage('admin', $photo);
                Image::create([
                    'work_id'=>$work->id,
                    'image'=>$image_path,
                ]);
            }
            session()->flash('success', 'added successfully.');
        }
        return redirect()->route('work.show',$id);

    }

    public function deleteImage(Image $image)
    {
        $image->delete();
        return response()->json('success');
    }
}
