<?php

namespace App\Http\Controllers\back;

use App\Models\album;
use App\Models\photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UniversalController extends Controller
{
    public function index()
    {
        return view('back.index',[
        'album'=> album::latest()->get(),
        'photo'=> photo::latest()->get()
]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'JudulFoto' => 'required|min:3',
        'Deskripsi' => 'required|min:3',
        'created_at' => 'required|date',
        'Album' => 'required|exists:albums,id',
        'LokasiFoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Handle file upload
    if ($request->hasFile('LokasiFoto')) {
        $file = $request->file('LokasiFoto');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $path = Storage::disk('public')->putFileAs('images', $file, $filename);
        $data['LokasiFoto'] = $path;  // Store file path in DB
    } else {
        return redirect()->back()->with('error', 'Photo file is required');
    }

    // Save to DB (Ensure your `photo` model uses the correct table)
    Photo::create([
        'JudulFoto' => $data['JudulFoto'],
        'DeskripsiFoto' => $data['Deskripsi'], 
        'created_at' => $data['created_at'], 
        'AlbumID' => $data['Album'], 
        'LokasiFoto' => $data['LokasiFoto'],
    ]);
    

    return back()->with('success', 'Photo uploaded successfully');
}

        
        public function store2(Request $request2){
            $data = $request2->validate([
                'NamaAlbum' => 'required|min:3',
                'Deskripsi' => 'required|min:3',  
                'created_at' => 'required|date'   
            ]);    
        
            album::create($data);  
        
            return back()->with('success','Album has been created');   
        }
        

}