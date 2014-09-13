textFilter
==========

textFilter

Example:

```php
$config = array(
    'GardianFileFilter' => array(
        'drugadvocacy'=> array(
        'weighted',
    ),
    'illegaldrugs'=> array(
        'weighted',
        'weighted_portuguese',
    ),
);

$filter = new \Robth82\Textfilter\TextFilter($config);

if($filter->analyze('this is in the american cannabis society'))
{
    echo 'Expleciet material found with score ';
    echo $filter->getResponse()->getScore();
}
```

output
```
Expleciet material found with score 50
```
