 public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL, $email_type=NULL, $redirect_url=NULL) {
		//Load email library
		
		$this->load->library('email');
		if($from == NULL)
			$from		=	$this->db->get_where('settings' , array('key' => 'system_email'))->row()->value;
		//SMTP & mail configuration
		
		if($_SERVER["HTTP_HOST"] == 'reskillifydev.com'){
			$config = array(
				'protocol'  => 'mail',
				'smtp_host' => get_settings('smtp_host'),
				'smtp_port' => get_settings('smtp.sendgrid.net'),
				'smtp_user' => get_settings('apikey'),
				'smtp_pass' => get_settings('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'),
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'newline' => "\r\n"
			);
		}else{
			$config = array(
				'protocol'  => get_settings('protocol'),
				'smtp_host' => get_settings('smtp_host'),
				'smtp_port' => get_settings('smtp_port'),
				'smtp_user' => get_settings('smtp_user'),
				'smtp_pass' => get_settings('smtp_pass'),
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'newline' => "\r\n"
			);
		}
	
		//$this->email->('MIME-Version', 1.0);
		$this->email->set_header('Content-type', 'text/html');
		$this->email->set_header('charset', 'UTF-8');
		$this->email->initialize($config);
		//$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$email_data = array('subject' => $sub, 'message' => $msg);
		if ($email_type == "verification") {
			$email_data['redirect_url'] = $redirect_url;
		}

		
		// $arraySub=array('Submit Checklist','Checklist Not Approved','Checklist Approved','Password reset request','Login credentials details','Instructor Membership Purchased','Membership Purchased','Bundle Purchase','The bundle has sold out','Suspended Offline Payment','Course Completion Notification','Product Purchase','Addon Purchase','Course Purchase','Congrats! You Have Sold A Product!','Congrats! You Have Sold A Course!',"Hey Go-Getter! It's time to Verify Your Email Address","Hey Here are your ReSkillify Credentails","ReSkillify invitation code","ReSkillify Support","Reschedule call","Schedule Cancellation",'See Who’s Talking In Your ReSkillify Group','Scheduled call Notification','Scheduled call confirmation','Welcome to ReSkillify','Notification Regarding The Enrolled Course On ReSkillify');

		
		
		// if (in_array($sub, $arraySub)) {

		//    new template ---------------			
			$htmlContent = $this->load->view('email/updated_template', $email_data, TRUE);
		
		
			// }else{
		// 	$htmlContent = $this->load->view('email/template', $email_data, TRUE);
		// }
		//print_r($htmlContent);die();
		//$htmlContent = $this->load->view('email/updated_template', $email_data, TRUE);
		 //print_r($htmlContent);die();
		$this->email->to($to);
		$this->email->bcc('times.developer2020@gmail.com');
		$this->email->from($from, get_settings('system_name'));
		$this->email->subject($sub);
		$this->email->message($htmlContent);
		$this->email->send();
		//echo"<pre">;print_r($this->email->print_debugger());
		
	} 