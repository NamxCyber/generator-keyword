<?php
echo " +++++++++++++++++++++++++++\n ";
echo " + Google Keyword Scrapper+ \n";
echo " Created By NamzCyber. \n";
echo "++++++++++++++++++++++++++++\n";
echo ' Input Keyword In Here: ';
$key = trim(fgets(STDIN));
function fungsiPengambilanData($keyword) {
    $keywords = array();
    $data = file_get_contents('http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=id-ID&q='.urlencode($keyword));
    if (($data = json_decode($data, true)) !== null) {
        $keywords = $data[1];
    }

    return $keywords;
}

var_dump(fungsiPengambilanData($key));
