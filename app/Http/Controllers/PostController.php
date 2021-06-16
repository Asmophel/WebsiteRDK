<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
 
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Photo;
use App\Models\User;
use DB;

class PostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show', 'delete']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('posts.create');
    }
 
    public function store(Request $request)
    {
        //$user = Auth::user()->id;
        
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'waktu_acara' => 'required',
            'tipe' => 'required',
        ]);
 
        $post = Post::create([
    		'title' => $request->title,
            'content' => $request->content,
            //'user_id' => $user,
            'tipe' => $request->tipe,
    		'waktu_acara' => $request->waktu_acara,
        ]);
        
        
        // Photo::create([
        //     'post_id' => $post->id,
            
        // ]);

        // $validateImageData = $request->validate([
        //     'images' => 'required',
        //         'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
        // ]);
        
        
        
        // $title = [];
        // $pathArr = [];
        //$post_idArr = [];
        if($request->hasfile('photos'))
            {
                //dd($request->file('photos'));
                foreach($request->file('photos') as $key => $file)
                {
                    $path = $file->store('public/images');
                    $name = $file->getClientOriginalName();
                    $ext = $file->getClientOriginalExtension();
                    // $i->increment('$i');
                    // dd($i);
                    $filename = time() . rand(0, 100) . "." . $ext;
                    $path1 = $file->move('images/', $filename);
                    // $title[] = $name;
                    // $pathArr[] = $path;
                    // $post_idArr[] = $post->id;
                    $insert[$key]['title'] = $name;
                    $insert[$key]['path'] = $path1;
                    $insert[$key]['post_id'] = $post->id;
                    // $i = $i+1;
                }
            }
        Photo::insert($insert);

        // $upload = new Photo;
        // $upload->images = json_encode($title);
        // $upload->images = json_encode($pathArr);
        // $upload->images = json_encode($post_idArr);
        // $upload->save();
                
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

 
    public function show($id)
    {
        $post = Post::find($id);
        $photos = Photo::where('post_id',$id)->get();
        // dd($post->title);
        // dd($photos->post_id);
        // dd($photos->id);
        return view('posts.show',compact('post', 'photos'));
    }
 
    public function edit(Post $post)
    {
        // $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }
 
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }
 
    public function destroy($post)
    {
        $user = Auth::user()->id;
        DB::table("post_user")->where('user_id', $user)->delete();
        
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }

    public function daftarkegiatan(Request $request, $id)
    {
        // $user = User::find($id);
        // $user = Auth::user()->id;
        // $ay = User::find($user);  
        // $test = $ay->post()->get();
        //dd($test);
        $post = Post::find($id);
        // dd($post);
        $request->input('Roles');
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        // $user->amalyaumi()->attach($beer_id);
        // $amalibadah = AmalYaumi::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
    
        return view('posts.daftarkegiatan',compact('post'));
    }

    public function userkegiatan(Request $request, $id)
    {
        // $this->validate($request, [
        //     'Tanggal' => 'required',
        //     'roles' => 'required',
        // ]);
        // $input = $request->all();
        // if(!empty($input['password'])){ 
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = Arr::except($input,array('password'));    
        // }
        $post = Post::find($id);
        // dd($id);
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        // dd($user);
        // $user->update($input);
        // $user->amalyaumi()->attach($user_id, ['amal_yaumi_id'=>$request->input('roles'), 'Tanggal_amalyaumi'=>$request->input('Tanggal')]);
        $user->post()->attach($id);
        return redirect()->route('posts.index')
                        ->with('success','User updated successfully');
    }

    public function diikuti(Request $request)
    {

        $user = Auth::user()->id;
        
        $ay = User::find($user);  
        $test = $ay->post()->get();
        // dd($test);
        //dd(User::with('amalyaumi')->get());

        // foreach ($test as $test1) {
        //     dd($test1->pivot->amal_yaumi_id);
        // }

        //dd($test->pivot->amal_yaumi_id);
        //$viewed = $ay->user()->pivot->Tanggal_amalyaumi;
        //$amal = AmalYaumi::with('user')->get();
        $amals = Post::get();
        // dd($amal);

        // dd($amal);
        // $tgl = AmalYaumi::with('user')->get();
        // $amal = AmalYaumi::all();
        // $amal->users()->attach($user);
        return view('posts.diikuti',compact('test', 'amals'));
    }


    public function kegiatan_diikuti(Post $post)
    {
        //
    }
}