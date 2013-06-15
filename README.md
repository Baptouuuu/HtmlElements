### Installation
```
curl -sS https://getcomposer.org/installer | php
```
then
```
php composer.phar install
```

### Usage
Retrieving the html factory service:
```
$factory = $sc->get('html-elements');
```

Rendering an element:
```
echo $factory->render('elementName', array('attribute' => 'value'));
```

As it returns html objects, you can also do:
```
echo $factory->render('elementName')->setAttribute('attribute', 'value');
```