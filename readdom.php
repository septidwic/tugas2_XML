<?php
$doc = new DOMDocument();
$doc->load( 'books.xml' );
 
$books = $doc->getElementsByTagName( "book" );
foreach( $books as $book )
{
$nim = $book->getElementsByTagName( "nim" );
$nim = $nim->item(0)->nodeValue;
 
$alamat = $book->getElementsByTagName( "alamat" );
$alamat = $alamat->item(0)->nodeValue;
 
$nama = $book->getElementsByTagName( "nama" );
$nama = $nama->item(0)->nodeValue;

$Progdi = $book->getElementsByTagName( "Progdi" );
$Progdi = $Progdi->item(0)->nodeValue;
 
echo "$nama - $nim - $alamat - $Progdi\n";
}
?>