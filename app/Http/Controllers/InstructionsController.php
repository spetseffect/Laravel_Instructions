<?php

namespace App\Http\Controllers;

use App\Models\Instructions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class InstructionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $str=null)
    {
        $inst = new Instructions();
        if(empty($str)) {
            $instr = $inst->index();
        }else{
            $instr = $inst->search($str);
        }
        return view('instructions.instructions', compact('instr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'description' => 'required',
            'device' => 'required',
            'file' => 'required|mimes:pdf,jpg,png,txt,doc,docx'
        ]);
        $file=$request->file('file');
        $newfname=time().$file->getFilename();
        Storage::move($file->getPathname(), '/publick/inst-files/'.$newfname);
        $instruction = new Instructions([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'filename' => $newfname,
            'status' => 1,
            'authorId' => 1,
        ]);
        $instruction->save();
        return redirect('/')->with('success', 'Instruction saved!');
//        return $file->getFilename();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructions  $instructions
     * @return \Illuminate\Http\Response
     */
//    public function show(string $instructions)
//    {
//        return $instructions;
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructions  $instructions
     * @return \Illuminate\Http\Response
     */
//    public function edit(Instructions $instructions)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructions  $instructions
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Instructions $instructions)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructions  $instructions
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Instructions $instructions)
//    {
//        //
//    }
}
