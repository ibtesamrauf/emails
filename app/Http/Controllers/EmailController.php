<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Validator;

class EmailController extends Controller
{
    public function index(){
    	return view('frontend.index');
    }

    public function index_post(Request $request)
    {
    	Validator::make($request->all(), [
		    'csv_file' => 'required',
		])->validate();

	    $file_path = $request->csv_file->store('csv');
	    $file_path = storage_path().'/app/'.$file_path;

	    // get csv file data in array
	    $customerArr = $this->csvToArray($file_path);

	    // insert email to emails table
	    Email::insert($customerArr);

	    \Session::flash('message', 'Emails inserted!'); 
		\Session::flash('alert-class', 'alert-success'); 

	    return redirect('/');
    }

    function csvToArray($filename = '', $delimiter = ',')
	{
	    if (!file_exists($filename) || !is_readable($filename))
	        return false;

	    $header = null;
	    $data = array();
	    if (($handle = fopen($filename, 'r')) !== false)
	    {
        	$i = 0;
	        while (($row = fgetcsv($handle, 10000, $delimiter)) !== false)
	        {
	            if (!$header)
	                $header = $row;
	            else
	                $data[] = array_combine($header, $row);
	        }
	        fclose($handle);
	    }

	    return $data;
	}

	public function email_list(){
		$perpage = 15;
		$email = Email::paginate($perpage);
		$total_email = Email::count();
		// vv($email);
		return view('frontend.email_list',compact('email','total_email'));
	}

}
