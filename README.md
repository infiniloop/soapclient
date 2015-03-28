Generic SOAP client
===================
A helper to generate SOAP calls to various API web services

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist codezen/yii2-soapclient "*"
```

or add

```
"codezen/yii2-soapclient": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You need to setup soap client application component:

```php
'components' => [
    'siteApi' => [
        'class' => 'zencode\soapclient\Client',
        'url' => 'http://myservice.com/api/hello',
        'options' => [
            'cache_wsdl' => WSDL_CACHE_NONE,
        ],
    ]
    ...
]
```

or define the client directly in the code:

```php
$client = new \zencode\soapclient\Client([
    'url' => 'http://myservice.com/api/hello',
]);
```

Example of calling the SOAP function:

```php
$client = Yii::$app->siteApi;
echo $client->getHello('ParameterValue');
```
