<?php

include('./vendor/autoload.php');

$config = array(
    'GardianFileFilter' => array(
        'badwords'=> array(
            'weighted_dutch',
            'weighted_french',
            'weighted_german',
            'weighted_portuguese',
            'weighted_spanish',
        ),
        'chat'=> array(
            'weighted',
            'weighted_italian',
        ),
        'conspiracy'=> array(
            'weighted',
        ),
        'domainsforsale'=> array(
            'weighted',
        ),
        'drugadvocacy'=> array(
            'weighted',
        ),
        'forums'=> array(
            'weighted',
        ),
        'gambling'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'games'=> array(
            'weighted',
        ),
        'goodphrases'=> array(
            'weighted_general',
            'weighted_general_danish',
            'weighted_general_dutch',
            'weighted_general_malay',
            'weighted_general_portuguese',
            'weighted_news',
        ),
        'gore'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'idtheft'=> array(
            'weighted',
        ),
        'illegaldrugs'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'intolerance'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'legaldrugs'=> array(
            'weighted',
        ),
        'malware'=> array(
            'weighted',
        ),
        'music'=> array(
            'weighted',
        ),
        'news'=> array(
            'weighted',
        ),
        'nudism'=> array(
            'weighted',
        ),
        'peer2peer'=> array(
            'weighted',
        ),
        'personals'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'pornography'=> array(
            'weighted',
            'weighted_chinese',
            'weighted_danish',
            'weighted_dutch',
            'weighted_french',
            'weighted_german',
            'weighted_italian',
            'weighted_japanese',
            'weighted_malay',
            'weighted_norwegian',
            'weighted_portuguese',
            'weighted_russian',
            'weighted_spanish',
        ),
        'proxies'=> array(
            'weighted',
        ),
        'secretsocieties'=> array(
            'weighted',
        ),
        'selflabeling'=> array(
            'weighted',
        ),
        'sport'=> array(
            'weighted',
        ),
        'translation'=> array(
            'weighted',
        ),
        'travel'=> array(
            'weighted',
        ),
        'upstreamfilter'=> array(
            'weighted',
        ),
        'violence'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'warezhacking'=> array(
            'weighted',
        ),
        'weapons'=> array(
            'weighted',
            'weighted_portuguese',
        ),
        'webmail'=> array(
            'weighted',
        ),
    )
);

$filter = new \Robth82\Textfilter\TextFilter($config);


if($filter->analyze('this is in the american cannabis society'))
{
    echo 'Expleciet material found with score ';
    echo $filter->getResponse()->getScore();
    var_dump($filter->getResponse());
}

echo '<pre>';
//var_dump($filter->getResponse());