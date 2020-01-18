<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
  public function home()
  {
  // $this->AdminAuthCheck();
    return view('marketing.dashboard');
  }
  public function productlist_m()
  {
  // $this->AdminAuthCheck();
    return view('marketing.productlist_m');
  }
  public function commission()
  {
  // $this->AdminAuthCheck();
    return view('marketing.commission');
  }

}
