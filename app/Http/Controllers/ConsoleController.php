<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ConsoleController extends Controller
{
    public function index(Request $request)
    {
    	return view('dashboard.sql_console')->with('result', $request->result);
    }

    public function executeQuery(Request $request)
    {
    	$request->validate([
		    'query' => 'required'
		]);

		$process = new Process('mysql -usrkyaganti -t -e "' . $request->get('query') . '"');

		$process->run();

		// executes after the command finishes
		if (!$process->isSuccessful()) {
		    throw new ProcessFailedException($process);
		}

		return $process->getOutput();

		return redirect()->back()->with('result', $process->getOutput());
    }	
}
