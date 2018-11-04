<?php
class Controller_Form extends Controller_Template
{
	public function action_index()
	{
		$this->template->title = '�R���^�N�g�t�H�[��';
		$this->template->content = View::forge('form/index');
	}
	
	// ���؃��[���̒�`
	public function forge_validation()
	{
		$val = Validation::forge();
		
		$val->add('name', '���O')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 50);
		
		$val->add('email', '���[���A�h���X')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 100)
			->add_rule('valid_email');
		
		$val->add('comment', '�R�����g')
			->add_rule('required')
			->add_rule('max_length', 400);
		
		return $val;
	}
	
	public function action_confirm()
	{
		$val = $this->forge_validation();
		
		if ($val->run())
		{
			$data['input'] = $val->validated();
			$this->template->title = '�R���^�N�g�t�H�[��: �m�F';
			$this->template->content = View::forge('form/confirm', $data);
		}
		else
		{
			$this->template->title = '�R���^�N�g�t�H�[��: �G���[';
			$this->template->content = View::forge('form/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
		}
	}
	
	public function action_send()
	{
		// CSRF�΍�
		if ( ! Security::check_token())
		{
			throw new HttpInvalidInputException('�y�[�W�J�ڂ�����������܂���');
		}
		
		$val = $this->forge_validation();
		
		if ( ! $val->run())
		{
			$this->template->title = '�R���^�N�g�t�H�[��: �G���[';
			$this->template->content = View::forge('form/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
			return;
		}
		
		$post = $val->validated();
		$data = $this->build_mail($post);
		
		// ���[���̑��M
		try
		{
			$this->sendmail($data);
			$this->template->title = '�R���^�N�g�t�H�[��: ���M����';
			$this->template->content = View::forge('form/send');
			return;
		}
		catch (EmailValidationFailedException $e)
		{
			Log::error(
				'���[�����؃G���[: ' . $e->getMessage(), __METHOD__
			);
			$html_error = '<p>���[���A�h���X�Ɍ�肪����܂��B</p>';
		}
		catch (EmailSendingFailedException $e)
		{
			Log::error(
				'���[�����M�G���[: ' . $e->getMessage(), __METHOD__
			);
			$html_error = '<p>���[���𑗐M�ł��܂���ł����B</p>';
		}
		
		$this->template->title = '�R���^�N�g�t�H�[��: ���M�G���[';
		$this->template->content = View::forge('form/index');
		$this->template->content->set_safe('html_error', $html_error);
	}
	
	// ���[���̍쐬
	public function build_mail($post)
	{
		$data['from']      = $post['email'];
		$data['from_name'] = $post['name'];
		$data['to']        = 'info@example.jp';
		$data['to_name']   = '�Ǘ���';
		$data['subject']   = '�R���^�N�g�t�H�[��';
		
		$ip    = Input::ip();
		$agent = Input::user_agent();
		
		$data['body'] = <<< END
------------------------------------------------------------
          ���O: {$post['name']}
���[���A�h���X: {$post['email']}
    IP�A�h���X: $ip
      �u���E�U: $agent
------------------------------------------------------------
�R�����g:
{$post['comment']}
------------------------------------------------------------
END;

		return $data;
	}
	
	// ���[���̑��M
	public function sendmail($data)
	{
		Package::load('email');
		
		$email = Email::forge();
		$email->from($data['from'], $data['from_name']);
		$email->to($data['to'], $data['to_name']);
		$email->subject($data['subject']);
		$email->body($data['body']);
		
		$email->send();
	}
}

