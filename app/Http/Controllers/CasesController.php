<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createCaseValidator;

class CasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

  /**
   * Show all cases to the user.
   * @return Response
   */
  public function index()
  {
      return view('cases/list');
  }

  /**
   * Create a new case
   */
  public function create()
  {
      return view('cases/create');
  }

  /**
   * Save the case to SuiteCRM
   * @param createCaseValidator $input
   * @return \Illuminate\View\View
   */
  public function store(createCaseValidator $input)
  {
      // Validator outputs.
    // -----------------------------------------------
    // $input->case_type    = $_POST['case_type'];
    // $input->case_subject = $_POST['case_subject'];
    // $input->case_message = $_POST['case_message'];

    return view('cases/create');
  }

    public function read()
    {
        return view('cases/view');
    }
}
