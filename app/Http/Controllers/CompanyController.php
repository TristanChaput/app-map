<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * 
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/home', ['companies'=>self::getCompanies()]);
    }

    private static function getCompanies(){
        return Company::all();
    }

    //select('employees.*')->join('companies', $id, '=', 'employee.company_id')
    public function getEmployeesFromCompany($id){
        return DB::table('employees')
                ->where('company_id', '=', $id)
                ->select('employees.id','last_name','first_name')
                ->get();    
    }

    /**
     * Show the data for a given company.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('pages/company', ['company'=>Company::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Company::find($id);
        $data->name         = $request->name;
        $data->address      = $request->address;
        $data->phone_number = $request->phone_number;
        $data->latitude     = $request->latitude;
        $data->longitude    = $request->longitude;
        $data->save();
        return redirect('api/company/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::find($id)->delete('cascade');
        return redirect('/');
    }
}
