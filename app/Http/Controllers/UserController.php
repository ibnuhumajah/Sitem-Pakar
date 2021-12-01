<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function index()
	{
		return view('layout.user.menu.dashboard');
	}
	public function diagnosa()
	{
		return view('layout.user.menu.diagnosa');
	}
	public function riwayat()
	{
		return view('layout.user.menu.riwayat');
	}
	public function detail()
	{
		return view('layout.user.menu.detail');
	}
	// public function admindashboard()
	// {
	// 	return view('layout.admin.menu.dashboard');
	// }

	// public function userdashboard()
	// {

	// 	// if (\Auth::user()->isAdmin) {
	// 	// 	return redirect('admin');
	// 	// } else if (\Auth::user()->isUser) {
	// 	// 	return redirect('user');
	// 	// }

	// 	return view('layout.user.menu.dashboard');
	// }
}
