<?php

class ManageController extends Controller {

	public function home(){
		return View::make('index');
	}

    public function getInfo(){
		return View::make('info');
	}

    public function getSample(){
		return View::make('sample');
	}
	public function getBase(){
		return View::make('base');
	}
	public function getNav(){

	}
	public function getArtcat(){
		$cats=Category::paginate(10);
		$cur=$cats->getCurrentPage();
		$last=$cats->getLastPage();
		$min=max(1,$cur-2);
		$max=min($last,$cur+2);
		return View::make('artcat',array('cats'=>$cats,'min'=>$min,'max'=>$max,'cur'=>$cur,'last'=>$last));
	}
	public function postArtcat(){
		if (1== Request::input('addcat', 0)){
			$cat=new Category();
			$cat->title=Input::get('title');
			$cat->parent=Input::get('parent',0);
			$cat->symbol=Input::get('symbol');
			$cat->type=Input::get('type','list');
			$cat->index=Input::get('index',0);
			$cat->show=Input::get('show','normal');
			$cat->url=Input::get('url');
			$cat->save();
		}
		return $this->getArtcat();
	}
}
