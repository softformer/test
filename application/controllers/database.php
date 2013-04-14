<?php
class Database extends CI_Controller {

	public function index()
	{

//Подгружает настройки базы данных группы 'default'
$this->load->database('default');
//Передает управление файлу database.php в views
$this->load->view('database');

//Подгружает библиотеку по работе с базами данных dbforge
$this->load->dbforge();
//Передает управление файлу database2.php в views
$this->load->view('database2');
	}
        
       
}