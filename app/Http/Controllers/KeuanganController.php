<?php
    
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
    
use App\Models\Keuangan;
use Illuminate\Http\Request;
use App\Models\User;
    
class KeuanganController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:keuangan-list|keuangan-create|keuangan-edit|keuangan-delete', ['only' => ['index','show']]);
         $this->middleware('permission:keuangan-create', ['only' => ['create','store']]);
         $this->middleware('permission:keuangan-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:keuangan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangans = Keuangan::latest()->paginate(5);
        return view('keuangan.index',compact('keuangans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keuangan.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;

        request()->validate([
            'Keterangan' => 'required',
            'Jumlah' => 'required',
            'Alur' => 'required',
            'Tanggal' => 'required',
        ]);
    
        Keuangan::create([
            'Keterangan' => $request->Keterangan,
            'Jumlah' => $request->Jumlah,
            'Alur' => $request->Alur,
            'Tanggal' => $request->Tanggal,
            'user_id' => $user,
        ]);
    
        return redirect()->route('keuangan.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Keuangan $keuangan)
    {
        return view('keuangan.show',compact('keuangan'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Keuangan $keuangan)
    {
        return view('keuangan.edit',compact('keuangan'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keuangan $keuangan)
    {
         request()->validate([
            'Keterangan' => 'required',
            'Jumlah' => 'required',
            'Alur' => 'required',
            'Tanggal' => 'required',
        ]);
    
        $keuangan->update($request->all());
    
        return redirect()->route('keuangan.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keuangan $keuangan)
    {
        $keuangan->delete();
    
        return redirect()->route('keuangan.index')
                        ->with('success','Product deleted successfully');
    }
}