<?php
App::uses('AppController', 'Controller');

class TopicsController extends AppController {

    public function index(){
    	$user = $this->Auth->user();
		$topics = $this->Topic->find('all', array(
			'conditions' => array('Topic.user_id' => $user['id'])));
		$this->set('topics', $topics);

	}

public $uses=array(
		'Catecory',
		'Comment',
		'Topic',
		'User'
		);

	public function add($id=null) {
		
		if($this->request->is('post')){
$this->Topic->create();
$this->request->data['Topic']['category_id']=1;
$this->request->data['Topic']['user_id']=1;

if($this->Topic->save($this->request->data)){
			$this->redirect('/');
		}
	}
}


	public function edit($id=null) {
if (!$this->Topic->exists($id)) {
			throw new NotFoundException('Invalid topic');
		}
		if ($this->request->is(array('post'))) {
			if ($this->Topic->save($this->request->data)) {
				$this->Session->setFlash('保存に成功しました');
				return $this->redirect('/');
			} else {
				$this->Session->setFlash('保存に失敗しました');
			}
		} else {
			$this->request->data = $this->Topic->find('first', array(
				'conditions' => array('Topic.id' => $id)
			));
		}
		$categories = $this->Category->find('list');
		$this->set(compact('categories'));
	}

	public function delete($id=null) {
$this->Topic->delete($id);
return $this->redirect('/');
	}
}
