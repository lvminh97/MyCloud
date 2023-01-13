<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FolderController extends Controller
{

    public function __construct() {
        $this->middleware("is_user");
    }

    public function getFolder($id){
        $item_id = $id;
        $resp = Storage::makeDirectory(public_path("Test/ABC"));
        dd($resp);
        return view("folder", [
            "folder" => [
                "id" => $item_id,
                "name" => "Root Folder",
                "public" => 1
            ],
            "itemList" => []
        ]);
    }

    public function getRootFolder() {
        return $this->getFolder("root");
    }
}
