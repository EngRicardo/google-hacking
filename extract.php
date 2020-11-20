<?php


include('simple_html_dom.php');


$temp = 'https://www.google.com.br/search?q=site:'.$_POST['url_php'];

$templus = $temp.$_POST['dorks'];

$file_name = uniqid('', true) . '.txt';

$download_file = '/home/vhosts/maravilhasdomundomoderno.freevar.com/google-hacking/download/'.$file_name;

echo "<br>";
echo "<br>";


echo '<h3>Link da pesquisa: ','<a href="', $templus, '" target="_blank">',$templus ,'</a></h3>';
echo '<h3>De um click no link abaixo para baixar um arquivo .txt com todos os links abaixo</h3>';

echo '<a href="download/', $file_name,'" download>Download file</a>';
echo "<br>";
echo "<br>";


$fk = fopen($download_file, 'a');


$html = file_get_contents($templus);
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
foreach ($links as $link){
    //Extract and show the "href" attribute.
    if(in_array($link->nodeValue, $checkVars)){

    }else{
        $name_link = $link->nodeValue;
        $name_link_n = $name_link."\n";
        $url_link = substr($link->getAttribute('href'),7);
        $url_link_n = $url_link."\n\n";


        echo '<h3>', $name_link, '</h3>';
        fwrite($fk, $name_link_n);


        echo '<p><a href="', $url_link, '" target="_blank">', $url_link,'</a></p>';
        fwrite($fk, $url_link_n);
    }
}
fclose($fk);

echo "<br>";
echo "<br>";
echo '<h2>','Página do Google: ','</h2>';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $templus);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

echo $result;


?>