<?php

namespace App\Http\Controllers;

use Alert;
use App\Reservasi;
use App\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Reservasi::all();
        return view('komponen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komponen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Reservasi;
        $data->nama_kamar = $request->nama_kamar;
        $data->nama_tamu = $request->nama_tamu;
        $data->nomor_telfon = $request->nomor_telfon;

        $tgl_cin    = Carbon::parse($request->check_in);
        // ->subhours(12)
        $tgl_cout   = Carbon::parse($request->check_out);
        // ->addhours(12)
        $days       = $tgl_cin->diffindays($tgl_cout);

        $data->check_in = $request->check_in;
        $data->check_out = $request->check_out;
        

        //cari beda get dan first
        $kamar = Kamar::select('tarif', 'jumlah_kamar')
                -> where('nama_kamar', $data->nama_kamar)->first();
        
        $order = Reservasi::select('nama_kamar')
                -> where('check_in', $data->check_in)->count();

        $banding = Reservasi::select('check_out', 'check_in')
                -> where('nama_kamar', $data->nama_kamar )->first();
        $hitung =  $days * $kamar->tarif;
        
        if ($tgl_cin < Carbon::now()) {
            $after_save = [
            'alert' => 'danger',
            'title' => 'Gagal !',
            'text-1'=> 'Mohon Isi Kembali',
            'text-2'=> 'Kesalahan Tanggal Check In'
            ];

        }elseif ($tgl_cout < $tgl_cin) {
            $after_save = [
            'alert' => 'danger',
            'title' => 'Gagal !',
            'text-1'=> 'Mohon Isi Kembali',
            'text-2'=> 'Kesalahan Tanggal Check out'
            ];
        }elseif ($order > $kamar->jumlah_kamar ) {
            $after_save = [
            'alert' => 'danger',
            'title' => 'Gagal !',
            'text-1'=> 'Mohon maaf tanggal '. $data->check_in . 'sampai tanggal ' . $data->check_out,
            'text-2'=> 'Penuh !'
            ];
            // && $data->$tgl_cin >= $banding->$tgl_cout || $data->$tgl_cin < $banding->$tgl_cin
        }
        else{
            $after_save = [
            'alert' => 'success',
            'title' => 'Data Berhasil Ditambahkan ! ',
            'text-1'=> 'Kamar Dipesan Selama '. $days . ' hari',
            'text-2'=> 'Dengan Total Biaya Rp.'. $hitung
         
        ];

        $data->save();
        
        }

        

        return redirect()->back()->with('after_save', $after_save);
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
        //
    }
}
