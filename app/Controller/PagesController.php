<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {
	public $uses=array(
		'Catecory',
		'Comment',
		'Topic',
		'User',
		'Player'
	);

	public function index() {
		$topics=$this->Topic->find('all');
		$this->set('topics',$topics);

		$players=$this->Player->find('all');
		$this->set('players',$players);
	}
	///setでcontrollerからviewへtopicsをセット

	public function detail() {
		$id = $this->request->id;

		$players=$this->Player->find('first', array(
			'conditions' => array(
				'id' => $id
			)
		));
		
		$this->set('players',$players);
		
	}



	
	public function delete($id=null) {
$this->Player->delete($id);
return $this->redirect('/');
	}
}





