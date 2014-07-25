<?php

class ManageController extends BaseController {

	public function server(){
		return View::make('index');
	}
        public function index(){
		return View::make('home');
	}
        public function info(){
		return View::make('info');
	}
}
