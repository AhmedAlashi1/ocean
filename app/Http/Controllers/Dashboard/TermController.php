<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\TermsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\TermRequest;
use App\Models\Service;
use App\Models\Term;

class TermController extends Controller
{
    public function index(TermsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.terms.index');
    }

    public function create()
    {
        $services = Term::select('service_name_en','service_name_ar')->distinct()->get();
        return view('dashboard.terms.create',compact('services'));
    }


    public function store(TermRequest $request)
    {
        try {
            $serviceName = $request->service_name === 'new' ? $request->new_service_name : $request->service_name;
            $term = Term::where('service_name_en',$request->service_name)->first();
            $serviceNameAr = $request->service_name === 'new' ? $request->new_service_name_ar : $term->service_name_ar;
            Term::create([
                'desc_en' => $request->input('desc'),
                'desc_ar' => $request->input('desc_ar'),
                'service_name_en' => $serviceName,
                'service_name_ar' => $serviceNameAr,
            ]);

            session()->flash('success', __('messages.created successfully.'));
            return redirect()->route('term.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.An error occurred while creating the term. Please try again.'));
            return redirect()->route('term.create');
        }
    }

    public function edit($id)
    {
        try {
            $term = term::find($id);
            if (!$term) {
                session()->flash('error', __('messages.The term is not exist'));
                return redirect()->route('term.index');
            }
            $services = Term::select('service_name_en','service_name_ar')->distinct()->get();
            return view('dashboard.terms.edit',compact('term','services'));
        }catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('term.index');
        }
    }


    public function update(TermRequest $request, $id)
    {
        try {
            $term = Term::findorfail($id);
            $serviceNameAr = Term::select('service_name_ar')->where('service_name_en',$request->service_name)->first();

            $term->update([
                'desc_en' => $request->input('desc'),
                'desc_ar' => $request->input('desc_ar'),
                'service_name_en' => $request->input('service_name'),
                'service_name_ar' => $serviceNameAr->service_name_ar,
            ]);
            session()->flash('success', __('messages.updated successfully.'));
            return redirect()->route('term.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.here was an error try again'));
            return redirect()->route('term.edit', $id);
        }
    }


    public function destroy(Term $term)
    {
        $term->delete();
        return response()->json('success');
    }
}
