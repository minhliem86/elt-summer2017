<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\KiddomSchedule;
use Auth;

class ScheduleController extends Controller {
    protected $schedule;
    protected $auth;

    public function __construct(KiddomSchedule $schedule)
    {
        $this->schedule = $schedule;
        $this->auth = Auth::client();
    }

	public function index()
    {
        $center_id = $this->auth->get()->center_id;
        $class_code = $this->auth->get()->class_code;
        $schedule = $this->schedule->where('center_id', $center_id)->where('class_code', $class_code)->first();
        // dd($schedule);
        if(count($schedule)){
                return view('Frontend::kiddom.event', compact('schedule'));
        }
        $this->auth->logout();
        return redirect()->route('f.getlogin')->withErrors('error', 'Không tìm thấy lịch học của học viên.');

    }

}
