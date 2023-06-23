<?php
Namespace App\Http\Controllers;

use App\Models\basecrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BasecrudController extends Controller
{
    public function index(){
        $data = Basecrud::get();
        return view('index',compact('data'));
    }
    public function create(){
        return view('Basecrud.create');
    }   
    public function store(Request $request)
    {
        
        // dd($request->all());
        
        $data = new Basecrud();
        $data->name = $request->name;
        $data->status = $request->status;
        $data->hobby = implode(',', $request->hobby);
        $image=$request->file('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('image'),$imagename);
        $data->image=$imagename;
        
        $data->save();
        return redirect()->route('index',compact('data'));
    }
    public function destroy($id){
        // Basecrud::where('id',$id)->delete();
        $news = Basecrud::findOrFail($id);
        $image_path = public_path("image/".$news->image);

    if(file_exists($image_path)){
        File::delete( $image_path);
    }
        $news->delete();
        return redirect()->route('index');
    }
    public function edit($id)
    {
        $data = Basecrud::where('id',$id)->first();
        return view('Basecrud.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $data = Basecrud::find($request->id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->hobby=implode(",",$request->hobby);



        if($request->hasFile('image'))
        {
            $image_path = public_path("image/".$data->image);
            if(File::exists($image_path))
            {
                File::delete($image_path);
            }
            $image=$request->file('image');
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('image/'),$imagename);
            $data->image=$imagename;
        
        }
        $data->save();
        return redirect()->route('index');

    }
}   