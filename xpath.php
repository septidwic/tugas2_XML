<?php
$doc = new DOMDocument();
$doc->load( 'books.xml');
$xpath = new DOMXPath($doc);
$arts = $xpath->query("/books/book/nim");

foreach ($arts as $art)
{
echo $art->nodeValue."";
}
$arts = $xpath->query("/books/book/nama");

foreach ($arts as $art)
{
echo $art->nodeValue."";
}
$arts = $xpath->query("/books/book/alamat");

foreach ($arts as $art)
{
echo $art->nodeValue."";
}
$arts = $xpath->query("/books/book/Progdi");

foreach ($arts as $art)
{
echo $art->nodeValue."";
}
?>
