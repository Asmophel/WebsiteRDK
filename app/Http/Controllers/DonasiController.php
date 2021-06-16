<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DonasiController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:donasi-list|donasi-create|donasi-edit|donasi-delete', ['only' => ['index','show']]);
         $this->middleware('permission:donasi-create', ['only' => ['create','store']]);
         $this->middleware('permission:donasi-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:donasi-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        //$donasis = Donasi::latest()->paginate(5);
        // $donasis = Donasi::latest()->paginate(5);
        // return view('donasi.index',compact('donasis'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        $sum = DB::table('donasis')->sum('nominal');
 
        return view('donasi.index',compact('sum'));
    }
 
    public function create()
    {
        return view('donasi.create');
    }
 
    public function store(Request $request)
    {
        $user = Auth::user()->id;

        $request->validate([
            'nominal' => 'required',
            'tanggal_donasi' => 'required',
            'keterangan' => 'required',
        ]);
 
        $donasis = Donasi::create([
    		'nominal' => $request->nominal,
            'tanggal_donasi' => $request->tanggal_donasi,
            'user_id' => $user,
            'keterangan' => $request->keterangan,
        ]);
        
 
        return redirect()->route('donasi.index')
                        ->with('success','Donasi created successfully.');
    }
 
    public function show(Donasi $donasi)
    {
        return view('donasi.show',compact('donasi'));
    }
 
    public function edit(Donasi $donasi)
    {
        return view('donasi.edit',compact('donasi'));
    }
 
    public function update(Request $request, Donasi $donasi)
    {
        $request->validate([
            'nominal' => 'required',
            'tanggal_donasi' => 'required',
            'keterangan' => 'required',
        ]);
 
        $donasis->update($request->all());
 
        return redirect()->route('donasi.index')
                        ->with('success','Donasi updated successfully');
    }
 
    // public function sum(Donasi $donasi)
    // {
    //     return 
    //     return view('donasi.index',compact('donasi'));
    // }

    public function destroy(Donasi $donasi)
    {
        $donasi->delete();
 
        return redirect()->route('donasi.index')
                        ->with('success','Post deleted successfully');
    }
}
