<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Http;

class CompanyController extends Controller
{
    public function minhasempresas(){
        $companies = Company::all();


        return view('minhasempresas', ['companies'=> $companies]);
    }

    public function create(){
        return view('companies.formEmpresa');
    }

    public function store(Request $request){

        $company= new Company;

        $company->eName=$request->eName;
        $company->eEmail=$request->eEmail;
        $company->ePhone=$request->ePhone;

        $company->save();

        $url = 'https://desafiobr.bitrix24.com.br/rest/1/f0esdj8w65yv1e1r/crm.company.add?fields[TITLE]='.$request->eName.'&fields[PHONE][0][VALUE]='.$request->ePhone.'&fields[EMAIL][0][VALUE]='.$request->eEmail;

        Http::post($url);

        return redirect('https://c924-45-237-111-47.sa.ngrok.io/minhasempresas')->with('msg', 'Empresa criada com sucesso!');

    }

    public function show($id){
        $company=Company::findOrFail($id);
        return view('companies.eshow', ['company' => $company]);

    }

    public function destroy($id){

        Company::findOrFail($id)->delete();

        return redirect('/minhasempresas')->with('msg', 'Empresa deletada com sucesso!');
    }

    public function edit($id) {

        $company = Company::findOrFail($id);

        return view('companies.edit', ['company'=>$company]);
    }

    public function update(Request $request){

        Company::findOrFail($request->id)->update($request->all());

        return redirect('/minhasempresas')->with('msg', 'Empresa editada com sucesso!');
    }
}
