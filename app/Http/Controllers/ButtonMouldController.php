<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\ButtonMould;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ButtonMouldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $data['metalbutton'] = ButtonMould::all();
        return view('mould.list',$data);

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    if (Auth::check()) {
        return view('mould.create');
    }
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
            
        //     'title.*' =>'required|array',
        //     'description.*' => 'required|array',
        //     'dimention.*' => 'required|array',
        //     'color.*' => 'required|array',
        //     'buyers.*' => 'required|array',
        //     'image.*' => 'required|image||array|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);




        foreach ($request->title as $key => $val){
           $data = array("title"=>$request->title[$key],"letering"=>$request->letering[$key],"description"=>$request->description[$key],"dimention"=>$request->dimention[$key],"color"=>$request->color[$key],"buyers"=>$request->buyers[$key],"image"=>$request->title[$key].'.'.$request->image[$key]->extension());
            ButtonMould::insert( $data);
           
            // $file = $request->image[$key]->store('images');
            $request->image[$key]->storeAs('public', $request->title[$key].'.'.$request->image[$key]->extension());
        
        }
        $data['metalbutton'] = ButtonMould::orderBy('id','desc')->paginate(10);
        return redirect('mould')->with('success', 'Image Inserted Successfully done','metalbutton', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ButtonMould  $buttonMould
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		
    }
	
	  public function search(Request $request)
    {
         
	
	    if(!empty($request->input('title'))) {

        $mould = ButtonMould::where('title', 'like', "%{$request->title}%")->get();

    } 
	
		    if(!empty($request->input('description'))) {

        $mould = ButtonMould::where('description', 'LIKE', "%{$request->description}%")->get() ;

    } 
	
		    if(!empty($request->input('letering'))) {

        $mould = ButtonMould::where('letering', 'LIKE', "%{$request->letering}%")->get() ;

    } 
	
		    if(!empty($request->input('buyers'))) {

        $mould = ButtonMould::where('buyers', 'LIKE', "%{$request->buyers}%")->get() ;
		

    } 
	
	 $data['metalbutton'] = $mould;
        return view('mould.list',$data);
  
   
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ButtonMould  $buttonMould
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
        $where = array('id' => $id);
$data['mould'] = ButtonMould::where($where)->first();
return view('mould.edit', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ButtonMould  $buttonMould
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        if (Auth::check()) {
		        if ($request->has('image')) {
					
					$update = ['title' => $request->title, 'letering' => $request->letering,'description' => $request->description,
'dimention' => $request->dimention,'color' => $request->color,'buyers' => $request->buyers,
"image"=>$request->title.'.'.$request->image->extension()
];


ButtonMould::where('id',$id)->update($update);
$request->image->storeAs('public', $request->title.'.'.$request->image->extension());
				}
				else{
					$update = ['title' => $request->title, 'letering' => $request->letering,'description' => $request->description,
'dimention' => $request->dimention,'color' => $request->color,'buyers' => $request->buyers
];


ButtonMould::where('id',$id)->update($update);
				}
		



return redirect('mould')->with('success', 'Data has been Updated');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ButtonMould  $buttonMould
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
		ButtonMould::where('id',$id)->delete();
		        return redirect('mould')->with('success', 'Data has been Deleted');

    }
}
