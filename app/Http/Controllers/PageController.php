<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{

  /**
   * Shows the homepage
   * 
   * @return \Illuminate\Http\Response
   */
  public function index()
  {  
    return view('home');
  }
}
