<?php

    namespace App\Http\Controllers;
    use Redis;

class AdminController extends Controller {

    public function index() {
        return view('admin.main');
    }

}

?>
