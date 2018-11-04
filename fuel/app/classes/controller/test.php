<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
class Controller_Test extends Controller {
	function action_index() {
		return View::forge('testtop');
	}
}