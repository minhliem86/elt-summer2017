<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\PromotionRepository;
use App\Repositories\CommonRepository;


class PromotionController extends Controller {

	protected $promotionRepository;

	protected $_upload_folder = 'public/upload/promotion';

	public function __construct(PromotionRepository $promotion){
		$this->promotionRepository = $promotion;
	}

	public function index()
    {
        $promotion = $this->promotionRepository->getAll();
        return view('Admin::pages.promotion.index')->with(compact('promotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRequest $imgrequest)
    {
        $current = $this->promotionRepository->getOrder();

        $common = new CommonRepository;

				$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=false,400,400);
				dd($img_url);

        // $data = [
        //     'name'=>$request->name,
        //     'slug' => \Unicode::make($request->name),
        //     'img_icon' => $img_url,
        //     'img_avatar' => $img_url2,
        //     'description' => $request->input('description'),
        //     'content' => $request->input('content'),
        //     'status'=> $request->status,
        //     'order'=>$current
        // ];
        // $this->promotionRepository->create($data);
        // Notification::success('Created');
        return  redirect()->route('admin.promotion.index');
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
        // $promotion = $this->promotionRepository->find($id);
        // return view('Admin::pages.promotion.view')->with(compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ImageRequest $imgrequest, $id)
    {
        // if($imgrequest->hasFile('img')){
        //     $file = $imgrequest->file('img');
        //     $destinationPath = 'public/upload'.'/'.$this->upload_folder;
        //     $name = preg_replace('/\s+/', '', $file->getClientOriginalName());
        //     $filename = time().'_'.$name;
				//
        //     // $file->move($destinationPath,$filename);
        //     $filename_resize = $destinationPath.'/'.$filename;
        //     $size = getimagesize($file);
        //     \Image::make($file->getRealPath())->resize(200,200)->save($filename_resize);
				//
        //     // $size = getimagesize($file);
        //     // if($size[0] > 620){
        //     //     \Image::make($file->getRealPath())->resize(620,null,function($constraint){$constraint->aspectRatio();})->save($destinationPath.'/'.$filename);
        //     // }else{
        //     //     $file->move($destinationPath,$filename);
        //     // }
				//
        //     $img_url = asset('public/upload').'/'.$this->upload_folder.'/'.$filename;
        // }else{
        //     $img_url = $request->input('img-bk');
        // }
				//
        // if($imgrequest->hasFile('img-slide')){
        //     $file = $imgrequest->file('img-slide');
        //     $destinationPath = 'public/upload'.'/'.$this->upload_folder;
        //     $name = preg_replace('/\s+/', '', $file->getClientOriginalName());
        //     $filename = time().'_'.$name;
				//
        //     // $file->move($destinationPath,$filename);
        //     $filename_resize = $destinationPath.'/'.$filename;
        //     $size = getimagesize($file);
        //     \Image::make($file->getRealPath())->resize(560,230)->save($filename_resize);
				//
        //     // $size = getimagesize($file);
        //     // if($size[0] > 620){
        //     //     \Image::make($file->getRealPath())->resize(620,null,function($constraint){$constraint->aspectRatio();})->save($destinationPath.'/'.$filename);
        //     // }else{
        //     //     $file->move($destinationPath,$filename);
        //     // }
				//
        //     $img_url2 = asset('public/upload').'/'.$this->upload_folder.'/'.$filename;
        // }else{
        //     $img_url2 = $request->input('img-bk-chitiet');
        // }
				//
        // $promotion = $this->promotionRepository->find($id);
        // $promotion->name = $request->name;
        // $promotion->slug = \Unicode::make($request->name);
        // $promotion->description = $request->input('description');
        // $promotion->content = $request->input('content');
        // $promotion->img_icon = $img_url;
        // $promotion->img_avatar = $img_url2;
        // $promotion->status = $request->status;
        // $promotion->order = $request->order;
        // $promotion->save();
				//
        // Notification::success('Updated');
        // return  redirect()->route('admin.promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        // $this->promotionRepository->destroy($id);
        // \Notification::success('Remove Successful');
        // return redirect()->route('admin.promotion.index');
    }

    public function deleteAll(Request $request){
        // if(!$request->ajax()){
        //     return view('404');
        // }else{
        //     $data = $request->arr;
        //     if($data){
        //         $this->promotionRepository->destroy($data);
        //         return response()->json(array('msg'=>'ok'));
        //     }else{
        //         return response()->json(array('msg'=>'error'));
        //     }
        // }
    }

    public function checkRelate(Request $request){
        // $promotion = $this->promotionRepository->find($request->dataid);
        // $count = $promotion->image()->get()->count();
        // if($count > 0){
        //     return response()->json(['msg'=>'yes']);
        // }else{
        //     $promotion->delete();
        //     return response()->json(['msg'=>'done']);
        // }
    }

}
