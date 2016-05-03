<?php

namespace Preksh\Dragdropfileupload\controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DragdropController extends Controller {

    public $js = array(
        'preksh/dragdropfileupload/js/jquery.min.js',
        'preksh/dragdropfileupload/js/dropzone.js',
    );
    public $css = array(
        'preksh/dragdropfileupload/css/dragdrop.css',
        'preksh/dragdropfileupload/css/dropzone.css',
    );

    public function index() {
        $page['js'] = $this->js;
        $page['css'] = $this->css;
        return view('fileupload::form')->with('page', $page);
    }

    public function upload() {
        $storeFolder = public_path('uploads');
        if (!file_exists($storeFolder)) {
            mkdir($storeFolder, 0777, true);
        }


        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $targetPath = $storeFolder . '/';
            $targetFile = $targetPath . $_FILES['file']['name'];
            move_uploaded_file($tempFile, $targetFile);
        }
    }

}
