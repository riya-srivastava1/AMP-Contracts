<?php

namespace App\Library;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Images
{
    /**
     * @method upload file
     * @param filename, foldername
     * @return image path
     */
    public function storeimage($request, $file, $folder)
    {
        $input = $request->except($file);
        if ($request->hasFile($file)) {
            $filename = $this->mediumSlug() . $file . '.webp';
            $path = $folder . '/' . $filename;
            $request->$file->move($folder . '/', $filename);
            $input[$file] = $path;
        }
        $input['created_by'] = Auth::user()->name;
        return $input;
    }
    public function deleteImages($image)
    {
        if (file_exists($image)) {
            unlink($image);
            return true;
        }
        // Storage::disk('public')->delete($image);
    }
    /**
     * @method create mediun range slug
     * @param
     * @return slug
     */
    public function mediumSlug()
    {
        return Str::random(15);
    }
}
