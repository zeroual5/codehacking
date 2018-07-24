<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminMediasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
//        $photos = Photo::all();
        $photos = Photo::paginate(10);
        return view('admin.media.index', compact('photos'));
    }

    public function create(){
        return view('admin.media.create');
    }

    public function store(Request $request){
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('Images',$name);
        Photo::create(['file'=>$name]);
    }

    public function destroy($id){
        $photo = Photo::find($id);
        if(file_exists(public_path($photo->file)))
            unlink(public_path($photo->file));
        $photo->delete();
        return redirect('admin/media');
    }

}
