<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\TestimonialRepository;
use App\Repositories\CommonRepository;


class TestimonialController extends Controller {

	protected $testimonialRepository;

	protected $_upload_folder = 'public/upload/testimonial';
	protected $_default_img = "asset('public/assets/backend/img/image_thumbnail.gif')";

	public function __construct(TestimonialRepository $testimonial){
		$this->testimonialRepository = $testimonial;
	}

	public function index()
    {
        $testimonial = $this->testimonialRepository->getAll();
        return view('Admin::pages.testimonial.index')->with(compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRequest $imgrequest)
    {
        $current = $this->testimonialRepository->getOrder();



				if($imgrequest->hasFile('img')){
						$common = new CommonRepository;
						$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,400,400);
				}else{
					$img_url = $this->_default_img;
				}
        $data = [
            'title'=>$request->title,
            'slug' => \Unicode::make($request->title),
            'img_url' => $img_url,
						'author'=>$request->author,
            'content' => $request->input('content'),
            'status'=> $request->status,
            'order'=>$current
        ];
        $this->testimonialRepository->postCreate($data);
        Notification::success('Created');
        return  redirect()->route('admin.testimonial.index');
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
        $testimonial = $this->testimonialRepository->getFindID($id);
        return view('Admin::pages.testimonial.view')->with(compact('testimonial'));
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
				'img_url' => $img_url,
				'author'=>$request->author,
				'content' => $request->input('content'),
				'status'=> $request->status,
				'order'=>$request->order,
			];
			$this->testimonialRepository->postUpdate($id,$data);
      Notification::success('Updated');
      return  redirect()->route('admin.testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->testimonialRepository->delete($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.testimonial.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->testimonialRepository->deleteAll($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
    }

    public function checkRelate(Request $request){
        // $testimonial = $this->testimonialRepository->find($request->dataid);
        // $count = $testimonial->image()->get()->count();
        // if($count > 0){
        //     return response()->json(['msg'=>'yes']);
        // }else{
        //     $testimonial->delete();
        //     return response()->json(['msg'=>'done']);
        // }
    }

}
