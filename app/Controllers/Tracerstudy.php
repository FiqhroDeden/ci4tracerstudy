<?php

namespace App\Controllers;

use App\Models\prodiModel;

class Tracerstudy extends BaseController
{
	public function __construct()
	{
		$this->prodiModel = new prodiModel();
	}
	public function index()
	{
		$data =
		[
			'title' => 'Tracer Study | UNPATTI',
			'prodi' => $this->prodiModel->findAll()
		];
		return view('tracerstudy/index', $data);
	}
}
