<?php
namespace App\Helpers;

use App\Models\Events;
use App\Models\ContactInformation;
use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function imageUpload($file, $existingFile = '')
    {
        $path = $file->store('public/images');
        return Storage::url($path);
    }
    public static function deleteFiles(array $filePaths)
    {
        foreach ($filePaths as $filePath)
        {
            $filePath = str_replace('/storage/', '', $filePath);
            if (Storage::disk('public')->exists($filePath))
            {
                Storage::disk('public')->delete($filePath);
            }
        }
    }

    public static function discountedPrice($price, $discount, $discountUnit)
    {
        if($discountUnit == 'percentage')
        {
            $discountPrice = ($discount / 100) * $price;
            $price = $price - $discountPrice;
        }
        else
        {
            $price = $price - $discount;
        }
        return number_format($price, 2);
    }

    public static function information()
    {
        return ContactInformation::first();
    }

    public static function recentEvents()
    {
        return Events::with(['primaryImage'])->orderBy('created_at','desc')->limit(2)->get();
    }


}

?>
