<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session extends Controller
{
    public function index()
  {
    $patients = Patient::all();
    return view();
  }
  public function create()
  {
    return view();
  }

  public function store()
  {
    return view();
  }
  public function delete($id)
  {
    return view();
  }
  public function edit($id)
  {
    return view();
  }
  public function update(Request $request )
  {
    return view();
  }

}
