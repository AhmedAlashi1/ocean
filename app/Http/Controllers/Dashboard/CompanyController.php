<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CompaniesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use ImageTrait;
    public function index(CompaniesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.companies.index');
    }

    public function create()
    {
        return view('dashboard.companies.create');
    }


    public function store(CompanyRequest $request)
    {
        try {
            if ($request->has('photo')) {
                $image_path = $this->uploadImage('admin', $request->photo);
            }

            Company::create([
                'name_en' => $request->input('name'),
                'name_ar' => $request->input('name_ar'),
                'image' => $image_path ?? null,
            ]);

            session()->flash('success', __('messages.created successfully.'));
            return redirect()->route('company.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.An error occurred while creating the company. Please try again.'));
            return redirect()->route('company.create');
        }
    }

    public function edit($id)
    {
        try {
            $company = Company::find($id);
            if (!$company) {
                session()->flash('error', __('messages.The company is not exist'));
                return redirect()->route('company.index');
            }
            return view('dashboard.companies.edit',compact('company'));
        }catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('companies.index');
        }
    }


    public function update(CompanyRequest $request, $id)
    {
        try {
            $company = Company::findorfail($id);
            if ($request->has('photo')) {
                $image_path = $this->uploadImage('admin', $request->photo);
            }

            $company->update([
                'name_en' => $request->input('name'),
                'name_ar' => $request->input('name_ar'),
                'image' => $image_path ?? $company->image,
            ]);
            session()->flash('success', __('messages.updated successfully.'));
            return redirect()->route('company.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.there was an error try again'));
            return redirect()->route('company.edit', $id);
        }
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json('success');
    }
}
