<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Land;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lahan = Land::all();
        return view('admin.penutupan-lahan.lahan', compact('lahan'));
    }

    public function import(Request $request)
    {
        if($fileUpload = $request->file('imported-file')){
            $path = Storage::disk('uploads')->put('files', $fileUpload);
            $data = Excel::load($path, function($reader) {
            })->get();

            if(!empty($data) && $data->count()){

                // $data = $data->toArray();
                // for($i=0;$i<count($data);$i++){
                //     $dataImported[] = $data[$i];
                // }

                foreach ($data->toArray() as $row) {
                    if(!empty($row))
                    {
                        $dataArray[] =
                        [
                            'kelasplahan' => $row['kelas_penutupan_lahan'],
                            'tn' => $row['tn'],
                            'ca' => $row['ca'],
                            'twa' => $row['twa'],
                            'sal' => $row['sal'],
                            'hl' => $row['hl'],
                            'hpt' => $row['hpt'],
                            'hp' => $row['hp'],
                            'hpk' => $row['hpk'],
                            'apl' => $row['apl']
                        ];
                    }
                }
                if(!empty($dataArray))
                {
                    Land::insert($dataArray);
                    return back();
                }
            }

            // Land::insert($dataImported);
        }
        // return back();
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
        //
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
