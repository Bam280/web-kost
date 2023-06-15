<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostManage;

class PostManageController extends Controller
{

    public function __construct()
    {
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = PostManage::all();
        return view('admin.postingan.index', compact('posts'));
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
        
        // Retrieve the checkbox data from the form
        $checkboxTransport = $request->input('checkbox0');
        $checkboxFkos = $request->input('checkbox1');
        $checkboxFsekitar = $request->input('checkbox3');

        if (!is_array($checkboxTransport)) {
            $checkboxTransport = [$checkboxTransport];
        }
        $checkboxString0 = implode( ',' , $checkboxTransport);

        if (!is_array($checkboxFkos)) {
            $checkboxFkos = [$checkboxFkos];
        }
        $checkboxString1 = implode( ',' , $checkboxFkos);

        if (!is_array($checkboxFsekitar)) {
            $checkboxFsekitar = [$checkboxFsekitar];
        }

        // Convert the checkbox data array to a comma-separated string for storage
        
        
        $checkboxString3 = implode( ',' , $checkboxFsekitar);


        // Store the data in the database
        // $checkbox->jalur_transportasi = $checkboxString0;
        // $checkbox->fasilitas_kamar = $checkboxString1;
        // $checkbox->fasilitas_sekitar = $checkboxString3;

        // Hanlde up Photo
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blogs', $filename);
        } else {
            $filename = 'default.jpg';
        }
        

        $store = PostManage::create(array_merge($request->all(), [
            'picture' => $filename,
            'jalur_transportasi' => $checkboxString0,
            'fasilitas_kamar' => $checkboxString1,
            'fasilitas_sekitar' => $checkboxString3,
        ]));
        return redirect()->route('managepost.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $delete = PostManage::find($id);
        $delete->delete();
        return redirect()->route('managepost.index');
    }
}
