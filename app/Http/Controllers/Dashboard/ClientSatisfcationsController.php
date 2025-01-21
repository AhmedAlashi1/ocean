<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ClientSatisfcationsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientSatisfcationRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\Client_Satisfcation;
use App\Traits\ImageTrait;

class ClientSatisfcationsController extends Controller
{
    use ImageTrait;

    public function index(ClientSatisfcationsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.client_satisfactions.index');
    }

    public function create()
    {
        return view('dashboard.client_satisfactions.create');
    }


    public function store(ClientSatisfcationRequest $request)
    {
        try {
            if ($request->has('photo')) {
                $image_path = $this->uploadImage('admin', $request->photo);
            }

            Client_Satisfcation::create([
                'name_en' => $request->input('name'),
                'name_ar' => $request->input('name_ar'),
                'nick_name_en' => $request->input('nick_name'),
                'nick_name_ar' => $request->input('nick_name_ar'),
                'ranked' => $request->input('ranked'),
                'content_en' => $request->input('content'),
                'content_ar' => $request->input('content_ar'),
                'image' => $image_path ?? null,
            ]);

            session()->flash('success', __('messages.created successfully.'));
            return redirect()->route('client_satisfactions.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('client_satisfactions.create');
        }
    }

    public function edit($id)
    {
        try {
            $client_satisfy = Client_Satisfcation::find($id);
            if (!$client_satisfy) {
                session()->flash('error', __('messages.The service is not exist'));
                return redirect()->route('client_satisfactions.index');
            }
            return view('dashboard.client_satisfactions.edit',compact('client_satisfy'));
        }catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('client_satisfactions.index');
        }
    }


    public function update(ClientSatisfcationRequest $request, $id)
    {
        try {
            $client_satisfy = Client_Satisfcation::findorfail($id);
            if ($request->has('photo')) {
                $image_path = $this->uploadImage('admin', $request->photo);
            }

            $client_satisfy->update([
                'name_en' => $request->input('name'),
                'name_ar' => $request->input('name_ar'),
                'nick_name_en' => $request->input('nick_name'),
                'nick_name_ar' => $request->input('nick_name_ar'),
                'ranked' => $request->input('ranked'),
                'content_en' => $request->input('content'),
                'content_ar' => $request->input('content_ar'),
                'image' => $image_path ?? $client_satisfy->image,
            ]);
            session()->flash('success',__('messages.updated successfully.'));
            return redirect()->route('client_satisfactions.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.there was an error try again'));
            return redirect()->route('client_satisfactions.edit', $id);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Client_Satisfcation $client_satisfaction)
    {
        $client_satisfaction->delete();
        return response()->json('success');
    }
}
