<?php
use Fuel\Core\Controller_Rest;
class Controller_Api  extends Controller_Rest{
	public function action_index() {
		
		//���f�����g����
		//$io = new ;
		//�f�[�^���炤��
		$fumufumu = $io -> fukuzou();
		
		
		//���Ԃ������`
		return $fumufumu;
	}
}