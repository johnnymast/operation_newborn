<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JohnnyController extends Controller
{
    /**
     * JohnnyController constructor.
     */
    public function __construct()
    {
        $this->imageDir = public_path().'/images';
    }

    public function index(Request $request)
    {
        return view('johnny.editor.editor');
    }

    public function images(Request $request)
    {
        return $this->recursiveDirectoryIterator($this->imageDir);
    }

    /**
     * @param string $directory
     * @param array $files
     *
     * @return array
     */
    private function recursiveDirectoryIterator($directory = null, $files = [])
    {
        $iterator = new \DirectoryIterator ($directory);

        foreach ($iterator as $info) {
            if ($info->isFile()) {
                if ($info->getBasename()[0] == '.') {
                    continue;
                }

                $path = str_replace($this->imageDir.'/', '', $info->getPath());
                $files [] = [
                    'caption' => $path.'/'.$info->getBasename(),
                    'file' => $path.'/'.$info->getBasename(),
                ];

                //$info;
            } elseif (! $info->isDot()) {
                //$list = [
                //    $info->__toString() => $this->recursiveDirectoryIterator($directory.DIRECTORY_SEPARATOR.$info->__toString()),
                //];

                $list = $this->recursiveDirectoryIterator($directory.DIRECTORY_SEPARATOR.$info->__toString());
                if (! empty($files)) {
                    $files = array_merge_recursive($files, $list);
                } else {
                    $files = $list;
                }
            }
        }

        return $files;
    }
}
