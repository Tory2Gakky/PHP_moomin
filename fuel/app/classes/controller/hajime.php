<?php
use Fuel\Core\Controller;
use Fuel\Core\Controller_Rest;
use Fuel\Core\Debug;
use Fuel\Core\View;

class Controller_hajime  extends Controller_Rest{
		
	public function action_index() {
		
		//apiをつかうよ～
		//$api= new himitu;
		$result[] = array(
				array(1,2,3,4,5,6,7,8,9),
				array(2,3,4,5,6,7,8,9,10),
				array(3,4,5,6,7,8,9,10,11)
		);
		
		
		
		
		//$result = Controller_hajime____toString();
		//表示する準備ぃ～
		Debug::dump($result);
		
		
		//$view = view::forge('testtop');
			//表示するデータをセットするお～
		//	$view -> set('title','見えたかな？');
		//	$view -> set('mommin',$result);
			
		//表示するよん
		//return $view;
		return View::forge('testtop')
	}
	
	function __toString(){
			$result[] = array(
					array(1,'ひがき','はやて','平塚','宝町','浜美','長男','ｈｔｔｐ://','販促物の王'),
					array(2,'ひがき','ひかる','平塚','宝町','磯高','次男','ｈｔｔｐ://','自称進学校'),
					array(3,'ひがき','るな','平塚','宝町','江中','長女','ｈｔｔｐ://','ソフテニ部')
			);
			
			Debug::dump($result);
				
			return $result;
			
	}
	
}