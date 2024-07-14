<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        dd("index");
    }
    public function create(){
        dd("create");
    }

    public function store(Request $request){
        dd('in a store');

    }

    public function show($id){
        dd('in a show');
    }

    public function edit($id){
        dd('edit');
    }

    public function update(Request $request, $id){
        dd('update');
    }

    public function destroy($id){
        dd('in a destroy');
    }

    public function export(){
        dd('export');
    }

    
}
