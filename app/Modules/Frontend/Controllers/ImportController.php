<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ImportUserRepository;

class ImportController extends Controller {

	protected $import;

  public function __construct(ImportUserRepository $import)
  {
    $this->import = $import;
  }

  public function getImport()
  {
    return view('Frontend::import.index');
  }

  public function postImport(Request $request)
  {
    $file = $request->file('file');
    $checkImport = $this->import->importUser($file);
    if($checkImport){
      return "done";
    }
    return "Co1 loi";
  }

}
