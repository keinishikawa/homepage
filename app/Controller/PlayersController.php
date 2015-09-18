<?php

App::uses('AppController', 'Controller');

class PlayersController extends AppController {

public $uses=array(
		'Catecory',
		'Comment',
		'Topic',
		'User',
		'Player'
	);

	public function edit($id=null) {
if (!$this->Player->exists($id)) {
			throw new NotFoundException('Invalid topic');
		}
		if ($this->request->is(array('post'))) {
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash('保存に成功しました');
				return $this->redirect('/');
			} else {
				$this->Session->setFlash('保存に失敗しました');
			}
		} else {
			$this->request->data = $this->Player->find('first', array(
				'conditions' => array('Player.id' => $id)
			));
		}
		
	}


	public function delete($id=null) {
$this->Player->delete($id);
return $this->redirect('/');
	}

	public $components = array('Session');
public function add() {

// var_dump($this->request->data);
		if ($this->request->is('post')) {
			$this->Player->create();
		
		
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash('保存に成功しました');
				return $this->redirect('/');
			} else {
				$this->Session->setFlash('保存に失敗しました');
			}
		}

	}
}
