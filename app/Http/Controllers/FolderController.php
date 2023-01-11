<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderController extends Controller
{

    public function __construct() {
        $this->middleware("is_user");
    }

    public function getFolder($id){
        $item_id = $id;
        // mkdir(public_path("Test/ABC"));
    }

    public function getRootFolder() {
        // return $this->getFolder("");
        echo "root";
        return view("auth.login");
    }
}
