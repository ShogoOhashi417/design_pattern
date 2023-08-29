<?php
require_once 'Listing.php';
?>

<?php
class ExtendedListing extends Listing {
    public function __construct($data_source)
    {
        parent::__construct($data_source);
    }

    public function hardly_read() {
        echo '一生懸命に';
        $this->data_source->read();
    }
}