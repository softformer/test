<?php
 echo 'В таблице "text" есть столбцы' . '</br></br>';
$fields = $this->db->list_fields('text');

foreach ($fields as $field)
{
   echo $field;
   echo '</br>';
}



