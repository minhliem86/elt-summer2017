<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\PromotionRepository ;
use App\Repositories\CommonRepository;


class PromotionController extends Controller {

	protected $promotionRepository;

	protected $_upload_folder = 'public/upload/promotion';
	protected $_default_img = "asset('public/assets/backend/img/image_thumbnail.gif')";

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

				if($imgrequest->hasFile('img')){
						$common = new CommonRepository;
						$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,400,400);
				}else{
					$img_url = $this->_default_img;
				}


        $data = [
            'title'=>$request->title,
            'slug' => \Unicode::make($request->title),
            'content' => $request->input('content'),
            'img_url' => $img_url,
            'status'=> $request->status,
            'order'=>$current
        ];
        $this->promotionRepository->postCreate($data);
        Notification::success('Created');
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
        $promotion = $this->promotionRepository->getFindID($id);
        return view('Admin::pages.promotion.view')->with(compact('promotion'));
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
			if($imgrequest->hasFile('img')){
				$common = new CommonRepository;
				$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,400,400);
			}else{
				$img_url = $request->input('img-bk');
			}
			$data = [
				'title'=>$request->title,
				'slug' => \Unicode::make($request->title),
				'content' => $request->input('content'),
				'img_url' => $img_url,
				'status'=> $request->status,
				'order'=>$request->order,
			];
			$this->promotionRepository->postUpdate($id,$data);
      Notification::success('Updated');
      return  redirect()->route('admin.promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->promotionRepository->delete($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.promotion.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->album->deleteAll($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
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
