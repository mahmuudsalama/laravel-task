<?php

namespace App\Http\Controllers;
use App\Models\track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TrackControllers extends Controller
{
    function index()
    {
        //  $student=DB::table('students')->get();

        
         $tracks =track::all();
        
        return view('TracksData',compact("tracks"));
    }


    function view($id)
    {
      $track=track::find($id);
      return view('TrackData',compact("track"));
    }
    public function destroy($id)
    {
        $track = Track::find($id);

        if ($track) {
            $track->delete();
            return redirect()->route('students.index');
        } else {
            return redirect()->route('students.index');
        }
    }

    public function create(){
      return view('TrackCreate');
    }
    public function store(Request $request){
   $image = $request->file('image');
   $ext =$image->getClientOriginalExtension();
   $name =uniqid().".$ext";
   $image ->move(public_path('uploads'),$name);
       Track::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'address'=> $request->address,
        'image'=> $name,
       ]);
       return redirect(route('students.index'));
    }

    public function edit($id){
        $track = Track::FindOrFail($id);
        return view('TrackEdit',compact('track'));
    }
    public function update(Request $request,$id){
        $track = Track::FindOrFail($id);
        $old_name= $track->image;
        if($request->hasFile('image')){
            if($old_name!==null){
                unlink(public_path('uploads/').$old_name);
                
            }
        }
        $image = $request->file('image');
       $ext =$image->getClientOriginalExtension();
       $name =uniqid().".$ext";
       $image ->move(public_path('uploads'),$name);
        $track->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'address'=> $request->address,
            'image'=> $name,
        ]);
        return redirect(route('students.index'));
    }
    public function delete($id)
    {
        $track = Track::FindOrFail($id);
        if($track->image!==null)
        {
 
            unlink(public_path('uploads/').$track->image);

        }
        $track->delete();
        return redirect(route('students.index'));
    }
}
    //

