<?php
require_once 'Listing.php';
require_once 'ExtendedListing.php';
require_once 'FileDataSource.php';
?>

<?php
$list1 = new Listing(new FileDataSource('普通のファイル'));
$list2 = new ExtendedListing(new FileDataSource('特別なファイル'));

try {
    $list1->open();
    $list2->open();
} catch (Exception $e) {
    die($e->getMessage());
}

$data = $list1->read();
echo $data;

$data = $list2->hardly_read();
echo $data;

$list1->close();
$list2->close();
