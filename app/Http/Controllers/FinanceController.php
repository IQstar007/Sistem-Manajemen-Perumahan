<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
  public function home()
  {
  // $this->AdminAuthCheck();
    return view('finance.dashboard');
  }
  public function transactionadd()
  {
  // $this->AdminAuthCheck();
    return view('finance.transactionadd');
  }
  public function transactionlist()
  {
  // $this->AdminAuthCheck();
    return view('finance.transactionlist');
  }
  public function transactionstage()
  {
  // $this->AdminAuthCheck();
    return view('finance.transactionstage');
  }
  public function transactionedit()
  {
  // $this->AdminAuthCheck();
    return view('finance.transactionedit');
  }

}
