<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
class utemfilesharing extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('index');
    }

    public function fileUpload(Request $req){
        $req->validate([
        'faculity_name' => 'required',
        'document_type' => 'required',
        'file' => 'required|mimes:csv,txt,xlx,xlsx,doc,docx,zip,xls,pdf|max:2048',
        'subject_name' => 'required',
        'description' => ''
        ]);
        $fileModel = new File;
        $user = Auth::user();
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->faculity_name = $req->faculity_name;
            $fileModel->document_type = $req->document_type;
            $fileModel->subject_name = $req->subject_name;
            $fileModel->description = $req->description;
            $fileModel->uploaded_by = auth()->user()->username;
            $fileModel->save();
            return response()->json(['success'=>'Successfully']);
            // return redirect()->back()->with('File uploaded successfully');
            
        }
   }

   public function getRecords(Request $request){
    $filedata = File::get();
    // return view('index',['filedata'=>$filedata]);
    // return view('home_page',['filedata'=>$filedata]);

    if ($request->ajax()) {
        return response()->json([
            'filedata'=>$filedata,
        ]);
    }

    return view('home_page', [
       'filedata' => $filedata
    ]);
   }

   public function getRecordsMD(Request $request){

    $filedata = File::where('uploaded_by', '=', auth()->user()->username)->get();
    
    if ($request->ajax()) {
        return response()->json([
            'filedata'=>$filedata,
        ]);
    }

    return view('manage_document', [
       'filedata' => $filedata
    ]);

   }

   public function fileDownload($file){
      
    //$url = Storage::url($file);

    // $download=DB::select('select file_path from files')->get();
    // return response()->download(storage_path('app/public/uploads/1656597396_music-recommender.dot'));
    return response()->download(storage_path('app/public/uploads/'. $file));
   }

   public function updateFile($id)
    {
    	$file = File::find($id);

	    return response()->json([
	      'data' => $file
	    ]);
    }

    public function deleteFile($id)
    {
    	$file = File::find($id);

	    return response()->json([
	      'data' => $file
	    ]);
    }

    public function edit(Request $req, $id)
    {
        $validate = Validator::make($req->all(),[
            'faculity_name' => 'required',
            'document_type' => 'required',
            'subject_name' => 'required',
            'description' => 'required',
            'uploaded_by' => 'required'
            ]);

        $fileId = File::find($id);
        $user = Auth::user();
        if($fileId) {
            $fileId->faculity_name = $req->faculity_name;
            $fileId->document_type = $req->document_type;
            $fileId->subject_name = $req->subject_name;
            $fileId->description = $req->description;
            $fileId->uploaded_by = auth()->user()->username;
            
            if($req->hasFile('file'))
            {
            $path = storage_path('app/public/uploads/'. $fileId->name);
            if(File::exists($path)){
                File::destroy($path);
            }
            // $file = $req->name('file');
            // $extension = $file->getClientOriginalName();
            // $filename = time().'_'.$extension;
            // $file->move('app/public/uploads/', $fileName);
            // $fileId->name = $filename;
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileId->name = time().'_'.$req->file->getClientOriginalName();
            $fileId->file_path = '/storage/' . $filePath;
            }
            $fileId->save();
            return response()->json(['success'=>200,
            'message'=>'File Updated Successfully']);
        }
        else{
            return response()->json(['success'=>200,
            'message'=>'ID Not Found']);
        }
            

}

public function destroy($id)
    {
        File::find($id)->delete();
        return response()->json(['success'=>200,
            'message'=>'File Deleted Successfully']);
    }
}