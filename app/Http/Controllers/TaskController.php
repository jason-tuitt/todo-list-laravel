<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
	function views() {
		$user_id = Auth::user()->id;
		$tasks = Task::where('user_id', $user_id)->get();
		return view('tasks.tasks', compact('tasks'));
	}

	function create(Request $request) {
		$user_id = Auth::user()->id;
		$task = new Task;
		$task->task = $request->task;
		$task->user_id = $user_id;
		$task->save();
		return redirect('/tasks');
	}

}
