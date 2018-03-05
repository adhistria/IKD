<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        return view('home-admin2')->with('cars',$cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::orderBy('id','desc')->take(5)->get();
//        return $cars;
        return view('admin-store')->with('cars',$cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
//        $request->validate([
//            'platnomor' => 'required|max:11',
//            'namapemilik' => 'required',
//            'namaperusahaan' => 'required'
//        ]);
//        $car->platnomor = $request->platnomor;
//        $car->namapemilik= $request->namapemilik;
//        $car->namaperusahaan= $request->namaperusahaan;
//        $car->save();
        $request->validate([
            'noPolisi' => 'required',
            'namaPemilik' =>'required',
            'namaPenyewa' => 'required',
            'thnPembuatan' => 'max:4',
            'thRegistrasi'=> 'required',
            'periodePemakaianKlien' => 'required' ,
            'periodePemilikMobil' => 'required' ,
            'hargaPenyewa' => 'required' ,
            'hargaKePemilik' => 'required' ,
        ]);
        $car->noPolisi= $request->noPolisi;
        $car->namaPemilik= $request->namaPemilik;
        $car->namaPenyewa= $request->namaPenyewa;
        $car->type = $request->type;
        $car->thnPembuatan= $request->thnPembuatan;
        $car->thRegistrasi= $request->thRegistrasi;
        $car->periodePemakaianKlien= $request->periodePemakaianKlien;
        $car->noSPK= $request->noSPK;
        $car->periodePemilikMobil= $request->periodePemilikMobil;
        $car->sopir= $request->sopir;
        $car->gaji= $request->gaji;
        $car->hargaPenyewa= $request->hargaPenyewa;
        $car->ppn = $request->hargaPenyewa *0.1;
        $car->pph = $car->hargaPenyewa*0.02;
        $car->totalHargaPenyewa = $request->hargaPenyewa + $car->ppn - $car->pph ;
        $car->hargaKePemilik= $request->hargaKePemilik;
        $car->pphPemilik = $request->hargaKePemilik*0.02;
        $car->gajiDriver= $request->gajiDriver;
        $car->feePihakKe3= $request->feePihakKe3;
        $car->feeManajemen= $car->totalHargaPenyewa - $car->hargaKePemilik - $car->gajiDriver - $car->ppn - $car->feePihakKe3;
        $car->save();
        $request->session()->flash('alert-success', 'Car was successful added!');
        return redirect()->route("cars.create");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $car = Car::find($request->id);
        $request->validate([
            'noPolisi' => 'required',
            'namaPemilik' =>'required',
            'namaPenyewa' => 'required',
            'thnPembuatan' => 'max:4',
            'thRegistrasi'=> 'required',
            'periodePemakaianKlien' => 'required' ,
            'periodePemilikMobil' => 'required' ,
            'hargaPenyewa' => 'required' ,
            'hargaKePemilik' => 'required' ,
        ]);
        $car->noPolisi= $request->noPolisi;
        $car->namaPemilik= $request->namaPemilik;
        $car->namaPenyewa= $request->namaPenyewa;
        $car->type = $request->type;
        $car->thnPembuatan= $request->thnPembuatan;
        $car->thRegistrasi= $request->thRegistrasi;
        $car->periodePemakaianKlien= $request->periodePemakaianKlien;
        $car->noSPK= $request->noSPK;
        $car->periodePemilikMobil= $request->periodePemilikMobil;
        $car->sopir= $request->sopir;
        $car->gaji= $request->gaji;
        $car->hargaPenyewa= $request->hargaPenyewa;
        $car->ppn = $request->hargaPenyewa *0.1;
        $car->pph = $car->ppn*0.2;
        $car->totalHargaPenyewa = $request->hargaPenyewa + $car->ppn - $car->pph ;
        $car->hargaKePemilik= $request->hargaKePemilik;
        $car->pphPemilik = $request->hargaKePemilik*0.02;
        $car->gajiDriver= $request->gajiDriver;
        $car->feePihakKe3= $request->feePihakKe3;
        $car->feeManajemen= $car->totalHargaPenyewa - $car->hargaKePemilik - $car->gajiDriver - $car->ppn - $car->feePihakKe3;        $car->save();

    }


    public function destroy(Request $request)
    {
        $car = Car::find($request->id);
        $car->delete();
    }
    public function choice(Request $request)
    {
        if(Input::get('update')){
            $this->update($request);
            $request->session()->flash('alert-success', 'Car was successful updated!');
            return redirect()->route("cars.index");

        }elseif(Input::get('destroy')){
            $this->destroy($request);
            $request->session()->flash('alert-success', 'Car was successful destroyed!');
            return redirect()->route("cars.index");

        }
    }
}
