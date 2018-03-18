<?php
$books = array();
$books [] = array(
'nim' => '15.01.53.0114',
'nama' => 'Septi Dwi Cahyanti',
'alamat' => "Tambak Aji rt 10 rw 12 Ngalian Semarang",
'Progdi' => "Teknik Informatika",

);
$books [] = array(
'nim' => '15.01.53.0084',
'nama' => 'Muhammad alfaiz',
'alamat' => " Dk jatibarang rt 01 rw 01 Mijen Semarang",
'Progdi' => "Teknik Informatika",

);
 
$doc = new DOMDocument();
$doc->formatOutput = true;
 
$r = $doc->createElement( "books" );
$doc->appendChild( $r );
 
foreach( $books as $book )
{
$b = $doc->createElement( "book" );
 
$nim = $doc->createElement( "nim" );
$nim->appendChild(
$doc->createTextNode( $book['nim'] )
);
$b->appendChild( $nim );
 
$nama = $doc->createElement( "nama" );
$nama->appendChild(
$doc->createTextNode( $book['nama'] )
);
$b->appendChild( $nama );
 
$alamat = $doc->createElement( "alamat" );
$alamat->appendChild(
$doc->createTextNode( $book['alamat'] )
);
$b->appendChild( $alamat );

$Progdi = $doc->createElement( "Progdi" );
$Progdi->appendChild(
$doc->createTextNode( $book['Progdi'] )
);
$b->appendChild( $Progdi );
 
$r->appendChild( $b );
}
 
echo $doc->saveXML();
$doc->save("books.xml");
?>

