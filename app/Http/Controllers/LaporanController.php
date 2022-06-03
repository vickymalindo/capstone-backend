<?php

namespace App\Http\Controllers;

use App\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporan::all();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required', 
            'image' => 'required',
            'description' => 'required', 
            'location' => 'required',
        ]);

        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('upload', $image);

        $data = [
            'title' => $request->input('title'), 
            'image' => url('upload/'.$image),
            'description' => $request->input('description'), 
            'location' => $request->input('location'),
        ];

        $laporan = Laporan::create($data);

        if ($laporan) {
            $result = [
                'status' => 200,
                'pesan' => 'data sudah ditambahkan',
                'data' => $data
            ];
        } else {
            $result = [
                'status' => 400,
                'pesan' => 'gagal menambahkan data',
                'data' => ''
            ];
        }

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Laporan::where('id_laporan', $id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Laporan::where('id_laporan', $id)->update($request->all());
        return response()->json('data berhasil diupdate (tes)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Laporan::where('id_laporan', $id)->delete();
        return response()->json('data berhasil dihapus (tes)');
    }
}