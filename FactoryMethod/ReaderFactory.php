<?php
require_once 'Reader.php';
require_once 'CSVFileReader.php';
require_once 'XMLFileReader.php';
?>

<?php
class ReaderFactory {
    public function create($file_name) {
        $reader = $this->createReader($file_name);
        return $reader; 
    }

    private function createReader($file_name) {
        $poscsv = strpos($file_name, 'csv');
        $posxml = strpos($file_name, 'xml');

        if ($poscsv) {
            $result = new CSVFileReader($file_name);
            return $result;
        } elseif ($posxml) {
            $result = new XMLFileReader($file_name);
            return $result;
        } else {
            die();
        }
    }
}