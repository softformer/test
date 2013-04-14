<?php

echo 'В базе данных gaz существуют таблицы: </br></br>';
$tables = $this->db->list_tables();

foreach ($tables as $table)
{
   echo $table;
   echo '</br>';
}
echo '</br>';
echo 'Версия ' . $this->db->platform() . ' ';
echo '  ---' . $this->db->version() . '</br></br>';

