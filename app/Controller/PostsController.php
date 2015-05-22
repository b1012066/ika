<?php

class PostsController extends AppController{
	// public $scaffold;
	public $helpers = array('Html', 'form');

	public function index(){
		// Postから全部取得して、postsという変数名でViewに値を渡している
		$this->set('posts', $this->Post->find('all', $params));
		$this->set('title_for_layout', '記事一覧');
	}

	public function view($id = null){
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}

	public function add(){
		if($this->request->is('post')){
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('success!');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('failed!');
			}
		}
	}

		public function edit($id = null){
			$this->Post->id = $id;
			if($this->request->is('get')){
				$this->request->data = $this->Post->read();
			}else{
				if($this->Post->save($this->request->data)){
					$this->Session->setFlash('success!');
					$this->redirect(array('action'=>'index'));
				}else{
					$this->Session->setFlash('failed!');
				}

			}
		}

}
