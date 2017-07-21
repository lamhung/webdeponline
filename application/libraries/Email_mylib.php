<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Email_mylib {
		public function email_configs() {
      		$config['useragent'] = 'CodeIgniter';
                  $config['protocol'] = 'smtp';
                  $config['smtp_host'] = 'ssl://smtp.googlemail.com';
                  $config['smtp_port'] = 465;
                  //var_dump($sender_email);exit;
                  $config['smtp_user'] = 'lamhung.nina@gmail.com';//email cua ban
                  $config['smtp_pass'] = 'eqpagmidbndtdgih';//pass cua ban
                  $config['smtp_timeout'] = 5;
                  $config['wordwrap'] = TRUE;
                  $config['wrapchars'] = 76;
                  $config['mailtype'] = 'html';
                  $config['charset'] = 'utf-8';
                  $config['validate'] = FALSE;
                  $config['priority'] = 3;
                  $config['crlf'] = "\r\n";
                  $config['newline'] = "\r\n";
                  $config['bcc_batch_mode'] = FALSE;
                  $config['bcc_batch_size'] = 200;

                  return $config;
		}
	}
?>