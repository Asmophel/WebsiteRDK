<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AmalYaumi;
use App\Models\AmalyaumiUser;
// use Spatie\Permission\Models\Role;
use DB;
use Auth;
use Hash;
use Illuminate\Support\Arr;
    
class AmalYaumiController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:amal-list|amal-create|amal-delete', ['only' => ['index','show', 'delete']]);
         $this->middleware('permission:amal-create', ['only' => ['create','store']]);
         $this->middleware('permission:amal-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user = Auth::user()->id;
        
        $ay = User::find($user);  
        $test = $ay->amalyaumi()->get();
        // dd($test);
        //dd(User::with('amalyaumi')->get());

        // foreach ($test as $test1) {
        //     dd($test1->pivot->amal_yaumi_id);
        // }

        //dd($test->pivot->amal_yaumi_id);
        //$viewed = $ay->user()->pivot->Tanggal_amalyaumi;
        //$amal = AmalYaumi::with('user')->get();
        $amals = Amalyaumi::get();
        // dd($amal);

        // dd($amal);
        // $tgl = AmalYaumi::with('user')->get();
        // $amal = AmalYaumi::all();
        // $amal->users()->attach($user);
        return view('amal.index',compact('test', 'amals', 'user'));
    }

    public function addamalyaumi(Request $request)
    {
        // $user = User::find($id);
        $request->input('Roles');
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        // $user->amalyaumi()->attach($beer_id);
        $amalibadah = AmalYaumi::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
    
        return view('amal.add',compact('amalibadah'));
    }

    public function postamalyaumi(Request $request)
    {
        $this->validate($request, [
            'Tanggal' => 'required',
            'roles' => 'required',
        ]);
    
        $input = $request->all();
        // if(!empty($input['password'])){ 
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = Arr::except($input,array('password'));    
        // }
    
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        // $user->update($input);
        // $user->amalyaumi()->attach($user_id, ['amal_yaumi_id'=>$request->input('roles'), 'Tanggal_amalyaumi'=>$request->input('Tanggal')]);
        $user->amalyaumi()->attach($request->input('roles'), ['Tanggal_amalyaumi'=>$request->input('Tanggal')]);
        return redirect()->route('amal.index')
                        ->with('success','User updated successfully');
    }


    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ayumi = AmalYaumi::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        DB::table("amal_yaumi_user")->where('user_id', $id)->delete();
        return redirect()->route('amal.index')
                        ->with('success','User deleted successfully');
    }
}