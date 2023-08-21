<?php 

/**
 * Helpers function file
 */

use App\Models\Documents;

 if (!function_exists('getDocumentTitle')) {
    function getDocumentTitle($id)
    {
        return Documents::where('id',$id)->select('title')->first();
    }
 }