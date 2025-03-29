<?php

namespace App\Http\Controllers;
use DB;
use app\Http\Requests;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    

    public function viewPatient(){
        $patients = DB::table('patient')->paginate(5);
        return view("patients", compact('patients'));
    }

    public function index(Request $request){
        $search = $request->input('search');
        
        
        $query = DB::table('patient');
        
        
        if ($search) {
            $query->where(function($query) use ($search) {
                $query->whereRaw('LOWER(name) LIKE ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(address) LIKE ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(sex) LIKE ?', ['%' . $search . '%']);
            });
        }
    
        
        $patients = $query->paginate(5); 
    
        return view('patients', compact('patients', 'search'));
    }

    public function insertPatient(){
        return view('insertPatient');
    }   

    public function insert(Request $request){
        $name = $request->input('patientName');
        $age = $request->input('patientAge');
        $sex = $request->input('patientSex');
        $addr = $request->input('patientAddress');
        DB::insert('insert into patient (name, age, sex, address) values (?,?,?,?)', [$name,$age,$sex,$addr]);
        echo "Record inserted successfully </br>";
        echo "Click <a href='/view'>here</a> to view patients";
    }

    public function deletePatient($id){
        DB::delete('delete from patient where id = ?', [$id]);
        echo"Record successfully deleted </br>";
        echo"Click <a href='/view'> here</a> to view patients";
    }

    public function editPatient($id){
        $patient = DB::select('select*from patient where id = ?', [$id]);
        return View('editPatient' ,compact('patient'));
    }

    public function edit(Request $request, $id){
        $name = $request->input('patientName');
        $age = $request->input('patientAge');
        $sex = $request->input('patientSex');
        $addr = $request->input('patientAddress');
        DB::update('update patient set name = ?, age = ?, sex = ?, address = ? where id = ?', [$name, $age, $sex,$addr, $id]);
        echo "Record edited successfully </br>";
        echo "Click <a href='/view'>here</a> to view patients";
    }

    public function result(){
        echo "This is result page";
    }
}
