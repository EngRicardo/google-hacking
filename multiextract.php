<?php

include('simple_html_dom.php');

session_start();

$destino = $_SESSION['arquivo_dest'];

$nome = $_SESSION['nome_arqv'];

$download_file = '/home/vhosts/maravilhasdomundomoderno.freevar.com/google-hacking/download/'.$nome;

echo '<h1>Relatório completo de todas as pesquisa:</h1>';
echo '<p>De um click no link abaixo para baixar um arquivo .txt com todos os links abaixo</p>';

echo '<a href="download/', $nome,'" download>Download file</a>';


$fh = fopen($destino,'r');
$fp = fopen($download_file, 'a');


while ($line = fgets($fh)) {
    $temp = 'https://www.google.com.br/search?q='.$line;

    $html = file_get_contents($temp);
    //Create a new DOM document
    $dom = new DOMDocument;

    //Parse the HTML. The @ is used to suppress any parsing errors
    //that will be thrown if the $html string isn't valid XHTML.
    @$dom->loadHTML($html);

    //Get all links. You could also use any other tag name here,
    //like 'img' or 'table', to extract other tags.
    $links = $dom->getElementsByTagName('a');

    $checkVars = array('Google', 'here', 'Books', 'Videos', 'News', 'Images', 'Maps', 'Shopping', 'Search tools', 'Past hour', 'Past 24 hours', 'Past week', 'Past month', 'Past year', 'Verbatim', 'repeat the search with the omitted results included', 'Sign in', 'Settings', 'Privacy', 'Terms', 'Next >');

    //Iterate over the extracted links and display their URLs
    echo '<h2>https://www.google.com.br/search?q=<font color="red">'.$line.'</font>', ' &#8628;', '</h2>';

    foreach ($links as $link){
        //Extract and show the "href" attribute.
        if(in_array($link->nodeValue, $checkVars)){

        }else{
            $name_link = $link->nodeValue;
            $name_link_n = $name_link."\n";
            $url_link = substr($link->getAttribute('href'),7);
            $url_link_n = $url_link."\n\n";


            echo '<h3>', $name_link, '</h3>';
            fwrite($fp, $name_link_n);


            echo '<p><a href="', $url_link, '" target="_blank">', $url_link,'</a></p>';
            fwrite($fp, $url_link_n);
        }
    }
}
fclose($fp);
fclose($fh);

?>