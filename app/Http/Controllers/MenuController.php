<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * beranda
     *
     * @param  mixed $request
     * @return void
     */
    public function beranda(Request $request)
    {
        return view('beranda');
    }

    /**
     * infoKegiatan
     *
     * @param  mixed $request
     * @return void
     */
    public function infoKegiatan(Request $request)
    {
        return view('info-kegiatan');
    }

    /**
     * dataSiswa
     *
     * @param  mixed $request
     * @return void
     */
    public function dataSiswa(Request $request)
    {
        return view('data-siswa');
    }
}
