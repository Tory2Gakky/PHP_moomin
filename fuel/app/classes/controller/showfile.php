<?php



class Controller_Showfile extends Controller
{
	public function action_index()
	{
		// �t�@�C�������w��
		$file = DOCROOT . 'show_file.php';
		
		// �t�@�C���̒��g����
		$content = file_get_contents($file);
		
		// View�I�u�W�F�N�g�𐶐�
		$view = View::forge('showfile');
		
		// �r���[��title���Z�b�g
		$view->set('title', '�t�@�C���\���v���O����');
		// �r���[��content���Z�b�g
		$view->set('content', $content);
		
		// View�I�u�W�F�N�g��Ԃ�
		return $view;
	}
}
