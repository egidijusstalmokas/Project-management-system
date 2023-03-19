<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::findOrFail(1);
        return view('company.index', compact('company'));
    }

    public function update(CompanyRequest $request, $id){
        $company = Company::findOrFail($id);
        $company->update([
            'company_name' => $request->company_name,
            'company_code' => $request->company_code,
            'vat_code' => $request->vat_code,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'company_manager' => $request->company_manager,
        ]);

        return redirect()->back()->with('success', 'Company information was updated successfully.');
    }
}
