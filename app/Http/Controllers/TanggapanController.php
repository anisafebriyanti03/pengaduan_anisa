<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Pengaduan;
// use App\Tanggapan;
// use App\Masyarakat;
// use Illuminate\Support\Facades\DB;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // DB::table('pengaduans')->where('id', $request->pengaduan_id)->update([
        //     'status'=> $request->status,
        // ]);

        // $data = $request->all();

        // $data['pengaduan_id'] = $request->pengaduan_id;
        // $data['petugas_id']=$petugas_id;

        // Alert::success('Berhasil', 'Pengaduan berhasil ditanggapi');
        // Tanggapan::create($data);
        // return redirect('admin/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = Pengaduan::with([
        //     'details', 'Masyarakat' 
        // ])->findOrFail($id);

        // return view('admin.tanggapan.add',[
        // 'item' => $item
        // ]);
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
}
