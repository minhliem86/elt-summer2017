<?php

return [
    'upload-path' => env('DROPZONER_UPLOAD_PATH'),
    'upload-thumb-path' => env('DROPZONER_UPLOAD_THUMB_PATH'),
    'validator'   => [
        'file'    => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ],
    'validator-messages' => [
        'file.mimes'     => 'Uploaded file is not in image format',
        'file.required'  => 'Image is required'
    ],
    'encode'      => 'jpg'
];
