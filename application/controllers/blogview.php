<?php
class Blogview extends CI_Controller {
    
public function index()
	{
		
                $this->load->view('blogview');
                $this->load->helper('array');
                $this->load->helper('date');
                $this->load->helper('download');
                $this->load->helper('form');
                $this->load->view('cod');
 
                
            
//Выводит дату в браузер                
              $datestring = "Год: %Y Месяц: %m День: %d - %h:%i %a";
$time = time();

echo mdate($datestring, $time);  
                
echo '</br>';        
                
               $array = array('color' => 'red', 'shape' => 'round', 'size' => '');

// вернёт "red"
echo element('color', $array);
echo '</br>';
// вернёт NULL
echo element('size', $array, NULL);
echo '</br>';
echo timezone_menu('UM8');
echo '</br>';

$quotes = array(
            "Я понял, что чем усердней я работаю, тем более я удачлив. - Томас Джефферсон",
            "Не оставайся в кровати, если ты не можешь там делать деньги. - Джордж Бёрнс",
            "Мы не проиграли игру; у нас просто вышло время. - Винс Ломбарди",
            "Если всё под контролем, увеличьте темп. - Марио Андретти",
            "Реальность — просто иллюзия, хотя и очень стойкая. - Альберт Эйнштейн",
            "Шанс служит лишь подготовленному уму - Луис Пастер"
            );
echo random_element($quotes);
    echo '</br>'; 
    
//form_password()
  
//Начинает загрузку файла в компьютер с сайта
//$data = file_get_contents("image/heart.PNG"); // Считываем содержимое файла
//$name = 'heart.PNG';
//
//force_download($name, $data);




}
}