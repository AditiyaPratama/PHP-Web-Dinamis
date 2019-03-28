<?php
 
$data = array(
 
'Data keponakan 1' => array('Nama' => array('Nur Rosyidah Fatinah'), 'Jenis Kelamin' => array('Perempuan')), 
'Data keponakan 2' => array('Nama' => array('Bintang Nabil Faza'), 'Jenis Kelamin' => array('Laki-laki')), 
'Data keponakan 3' =>array('Nama' => array('M Kahfi Ash-Shidqi'), 'Jenis Kelamin' => array('Laki-laki')), 
'Data keponakan 4' =>array('Nama' => array('M Tsaqib Rabbani'), 'Jenis Kelamin' => array('Laki-laki')),
'Data keponakan 5' =>array('Nama' => array('Alifa Qonita Hibatillah'), 'Jenis Kelamin' => array('Perempuan')),
'Data keponakan 6' =>array('Nama' => array('Aulia Syifaul Qolby'), 'Jenis Kelamin' => array('Perempuan')),
);

//menampilkan perulangan array multidimensi
foreach($data as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 
 }
 
 echo'<br/>';
}
echo '============================================================================================';
 echo '<br/>';

$alamat = array(
 
'Data Alamat 1' => array('Nama'  => array('Nur Rosyidah Fatinah'),'Alamat' => array('Lebaksiu')),
'Data Alamat 2' => array('Nama' => array('Bintang Nabil Faza'), 'Alamat' => array('Cikarang')), 
'Data Alamat3' =>array('Nama' => array('M Kahfi Ash-Shidqi'), 'Alamat' => array('Bekasi')),
'Data Alamat3' =>array('Nama' => array('M Tsaqib Rabbani'),'Alamat' => array('Cianjur')),
'Data Alamat 4' =>array('Nama' => array('Alifa Qonita Hibatillah'),'Alamat' => array('Tangerang')),
'Data Alamat 5' =>array('Nama' => array('Aulia Syifaul Qolby'), 'Alamat' => array('Tiga Raksa')),
);

//menampilkan perulangan array multidimensi
foreach($alamat as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
 }
 echo '============================================================================================';
 echo '<br/>';
 
 $umur = array(
 
'Data Umur 1' => array('Nama'  => array('Nur Rosyidah Fatinah'), 'umur' => array('11')),
'Data Umur 2' => array('Nama' => array('Bintang Nabil Faza'), 'umur' => array('10')),
'Data Umur 3' =>array('Nama' => array('M Kahfi Ash-Shidqi'), 'umur' => array('5')),
'Data Umur 4' =>array('Nama' => array('M Tsaqib Rabbani'),'umur' => array('3')),
'Data Umur 5' =>array('Nama' => array('Alifa Qonita Hibatillah'),'umur' => array('2')),
'Data Umur 5' =>array('Nama' => array('Aulia Syifaul Qolby'),'umur' => array('2')),
);

//menampilkan perulangan array multidimensi
foreach($umur as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
}
echo '============================================================================================';
 echo '<br/>';
 
 $hobi = array(
 
'Data Hobi 1' => array('Nama'  => array('Nur Rosyidah Fatinah'), 'Hobi' => array('Bersepeda')),
'Data Hobi2' => array('Nama' => array('Bintang Nabil Faza'), 'Hobi' => array('Main Game')),
'Data Hobi 3' =>array('Nama' => array('M Kahfi Ash-Shidqi'), 'Hobi' => array('Main Robot')),
'Data Hobi 4' =>array('Nama' => array('M Tsaqib Rabbani'),'Hobi' => array('Nangis')),
'Data Hobi 5' =>array('Nama' => array('Alifa Qonita Hibatillah'),'Hobi' => array('Makan')),
'Data Hobi 5' =>array('Nama' => array('Aulia Syifaul Qolby'),'Hobi' => array('Main Barbie')),
);

//menampilkan perulangan array multidimensi
foreach($hobi as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
}
echo '============================================================================================';
 echo '<br/>';
?>