<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\File;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // die('jsavdjads');
        return view('upload.index');
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
        // die('sajdhas');
        // var_dump($request->all());
        // echo $request->file;
        // echo $request->file;

        // die('tes');
        $result=base_convert(rand(1,9999999999),10,35);
        $result="http://mytransfer/" .$result;
        // $result=strtoupper($result);

        // echo  $result;
      $rules=$this->rules();
      $request->validate($rules);
      $data=$request->except('file');
      $data['link']=$result;
      $file=$request->file('file');
      $data['file'] = $file->store('thumbnails', ['disk' => 'uploads', ]);
      $file=File::create($data);
    //   var_dump($data);
    return redirect()->route('upload')->with('success',"uploaded successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $files=File::all();

        return view('upload.admin.index',['files'=>$files]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function download($id){
        // die('test');
        $file=File::where('id', '=', $id)->get();
        // var_dump($file[0]->file);
        // die();
        // $response = response()->download(Storage::disk('uploads/')->path($file[0]->file));
        // $redirect = back()->with('success', 'THX!');
        // return $response;
        return Storage::disk('uploads')->download($file[0]->file);

    }
    public function rules(){
        return [
        'title'=>'required|string|max:255',
        'message'=>'nullable',
        'file'=>'required|mimes:jpg,png,pdf',
        'link'=>'unique,file,link'
        ];
    }
}
