class FileHelper{
public static function getCsv(string $filePath){
$result = [];
$file = fopen($filePath, "r");

if ($file === false){
throw new FileNotFounException("This file is not available");
}

while (($row = fgetcsv($file)) !== FALSE) {
$result [] = $row;
}

fclose($file);
return $result;
}
}