<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use PDF;
use App\Contact;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewContact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
       $input['photo'] = null;

       if($request->hasFile('photo')){
          $input['photo'] =  "/upload/photo/".str_slug($input['name'],'-').'.'.$request->photo->getClientOriginalExtension();
          $request->photo->move(public_path('/upload/photo'),$input['photo']);
       }
       
       $input['nik'] = null;
       $input['nik'] = mt_rand(100000,999999);

       $birthDate= $input['birthdate'];
       $now      = date_create(date('Y-m-d'));
       $in       = date_create(date('Y-m-d', strtotime($birthDate)));
       $interval = $now->diff($in);
       $input['age']    = $interval->y;
       
       Contact::create($input);
       return response()->json([
           'success' => true
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return $contact;
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
        $input = $request->all();
        $contact = Contact::findOrFail($id);
        $input['photo'] = $contact->photo;

        if($request->hasFile('photo')){
            if($contact->photo!=null){
                unlink(public_path($contact->photo));
            }
            $input['photo'] =  "/upload/photo/".str_slug($input['name'],'-').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo'),$input['photo']);

        }

        $birthDate= $input['birthdate'];
        $now      = date_create(date('Y-m-d'));
        $in       = date_create(date('Y-m-d', strtotime($birthDate)));
        $interval = $now->diff($in);
        $input['age']    = $interval->y;

        $contact->update($input);

        return response()->json([
            "success" => true
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        if ($contact->photo != null){
            unlink(public_path($contact->photo));
        }

        Contact::destroy($id);

        return response()->json([
            "success" => true
        ]);
    }

    public function apiContact(){
        $contact = Contact::all();
        return Datatables::of($contact)
            ->addColumn('show_photo',function($contact){
                if ($contact->photo == null){
                    return "No Image";
                }
                return "<img class='rounded-square' width='50' height='50' src='".url($contact->photo)."?".$contact->updated_at."' alt=''>";
            })
            ->addColumn('action',function($contact){
                $user= auth()->user();
                if($user->hasRole('admin')){
                    return "
                        <a style='width:60px;margin-bottom:5px' onClick='viewCard(".$contact->id.")' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-eye-open'>View</i></a><br>
                        <a style='width:60px;margin-bottom:5px' onClick='editForm(".$contact->id.")' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'>Edit</i></a><br>
                        <a style='width:60px' onClick='deleteData(".$contact->id.")' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'>Delete</i></a>
                        ";
                }else{
                    return "
                        <a onClick='viewCard(".$contact->id.")' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-eye-open'>View</i></a>";
                }
                
            })->rawColumns(['show_photo','action'])->make(true);
        
    }

    public function exportPDF(){
        $contact = Contact::limit(20)->get();
        $pdf = PDF::loadView('pdf', compact('contact'));
        $pdf->setPaper('a4','potrait');

        return $pdf->stream();

        // return view('pdf',compact('contact'));

    }

    public function importCSV(Request $request){
    
            $file = $request->file('file');
        
            // File Details 
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();
        
            // Valid File Extensions
            $valid_extension = array("csv");
        
            // 2MB in Bytes
            $maxFileSize = 2097152; 
        
            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){
        
                // Check file size
                if($fileSize <= $maxFileSize){
        
                // File upload location
                $location = 'upload';
        
                // Upload file
                $file->move($location,$filename);
        
                // Import CSV to Database
                $filepath = public_path($location."/".$filename);
        
                // Reading file
                $file = fopen($filepath,"r");
        
                $importData_arr = array();
                $i = 0;
        
                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata );
                    
                    // Skip first row (Remove below comment if you want to skip the first row)
                    if($i == 0){
                        $i++;
                        continue; 
                    }
                    for ($c=0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata [$c];
                    }
                    $i++;
                }
                fclose($file);
        
                // Insert to MySQL database
                foreach($importData_arr as $importData){
                    
                    $birthDate= $importData[1];
                    $now      = date_create(date('Y-m-d'));
                    $in       = date_create($birthDate);
                    $interval = $now->diff($in);
                    $age      = $interval->y;

                    $nik      = mt_rand(100000,999999);                    
                    
                    $insertData = array(
                    "nik"=>$nik,
                    "name"=>$importData[0],
                    "birthdate"=>$birthDate,
                    "age" =>$age,
                    "gender"=>$importData[2],
                    "address"=>$importData[3]);
                    Contact::create($insertData);
        
                }

                return response()->json([
                    "success" => true
                ]);
        
            
                }else{
                    return response()->json([
                        "failed" => false
                    ]);
                }
        
            }else{
                return response()->json([
                    "failed" => false
                ]);
        }
        
            // Redirect to index
            // return redirect()->action('PagesController@index');
    }

    public function exportExcel()
    {   

        return Excel::download(new UsersExport, 'Contact.xlsx');
    }
  /**
   * Export to csv
   */
  public function exportCSV(){
        return Excel::download(new UsersExport, 'Contact.csv');

  }

}
