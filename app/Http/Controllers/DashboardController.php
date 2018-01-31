<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DashboardController extends Controller
{
	public function index()
	{
		$server = $_SERVER['SERVER_SOFTWARE'];
		$HTTPSenabled = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? true : false;
		// return (string)$HTTPSenabled;
		return view('dashboard.index',['HTTPSenabled' => $HTTPSenabled,'server'=>$server]);
	}

	public function toggleHTTPS(Request $request)
	{
		$process = new Process('pwd');

		$process->run();

		// executes after the command finishes
		if (!$process->isSuccessful()) {
		    throw new ProcessFailedException($process);
		}

		return $process->getOutput();

		return $_SERVER['HTTPS'];
		$_SERVER['HTTPS'] = !$_SERVER['HTTPS'];

		return redirect()->back();
	}
}
