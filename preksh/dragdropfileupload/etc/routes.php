<?php

Route::get('fileupload', 
  'preksh\dragdropfileupload\controllers\DragdropController@index');
Route::post('saveupload', 
  'preksh\dragdropfileupload\controllers\DragdropController@upload');