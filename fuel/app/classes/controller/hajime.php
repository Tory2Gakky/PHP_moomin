<?php
use Fuel\Core\Controller;
use Fuel\Core\Controller_Rest;
use Fuel\Core\Debug;
use Fuel\Core\View;

class Controller_hajime  extends Controller_Rest{
		
	public function action_index() {
		
		//api��������`
		//$api= new himitu;
		$result[] = array(
				array(1,2,3,4,5,6,7,8,9),
				array(2,3,4,5,6,7,8,9,10),
				array(3,4,5,6,7,8,9,10,11)
		);
		
		
		
		
		//$result = Controller_hajime____toString();
		//�\�����鏀�����`
		Debug::dump($result);
		
		
		//$view = view::forge('testtop');
			//�\������f�[�^���Z�b�g���邨�`
		//	$view -> set('title','���������ȁH');
		//	$view -> set('mommin',$result);
			
		//�\��������
		//return $view;
		return View::forge('testtop')
	}
	
	function __toString(){
			$result[] = array(
					array(1,'�Ђ���','�͂��','����','��','�l��','���j','��������://','�̑����̉�'),
					array(2,'�Ђ���','�Ђ���','����','��','�鍂','���j','��������://','���̐i�w�Z'),
					array(3,'�Ђ���','���','����','��','�]��','����','��������://','�\�t�e�j��')
			);
			
			Debug::dump($result);
				
			return $result;
			
	}
	
}