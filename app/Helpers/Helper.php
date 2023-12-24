<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function imageUpload($file)
    {
        $path = $file->store('public/images');
        return Storage::url($path);
    }
}


?>
