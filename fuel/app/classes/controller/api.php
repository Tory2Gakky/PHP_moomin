<?php
use Fuel\Core\Controller_Rest;
class Controller_Api  extends Controller_Rest{
	public function action_index() {
		
		//モデルを使うよ
		//$io = new ;
		//データもらうよ
		$fumufumu = $io -> fukuzou();
		
		
		//お返しするよ～
		return $fumufumu;
	}
}