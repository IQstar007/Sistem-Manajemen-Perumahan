<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function home()
  {
  // $this->AdminAuthCheck();
    return view('master.dashboard');
  }
  public function useradd()
  {
  // $this->AdminAuthCheck();
    return view('master.useradd');
  }
  public function userlist()
  {
  // $this->AdminAuthCheck();
    return view('master.userlist');
  }
  public function productadd()
  {
  // $this->AdminAuthCheck();
    return view('master.productadd');
  }
  public function productlist()
  {
  // $this->AdminAuthCheck();
    return view('master.productlist');
  }
  public function financialreport()
  {
  // $this->AdminAuthCheck();
    return view('master.financialreport');
  }

}
