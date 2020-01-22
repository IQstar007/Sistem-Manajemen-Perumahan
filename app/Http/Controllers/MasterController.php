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
  public function profilemaster()
  {
  // $this->AdminAuthCheck();
    return view('master.profilemaster');
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
  public function useredit()
  {
  // $this->AdminAuthCheck();
    return view('master.useredit');
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
  public function productedit()
  {
  // $this->AdminAuthCheck();
    return view('master.productedit');
  }
  public function categoryadd()
  {
  // $this->AdminAuthCheck();
    return view('master.categoryadd');
  }
  public function categorylist()
  {
  // $this->AdminAuthCheck();
    return view('master.categorylist');
  }
  public function categoryedit()
  {
  // $this->AdminAuthCheck();
    return view('master.categoryedit');
  }
  public function financialreport()
  {
  // $this->AdminAuthCheck();
    return view('master.financialreport');
  }

}
