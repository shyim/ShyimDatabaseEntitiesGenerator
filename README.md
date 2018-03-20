## Database Entities Generator for Shopware

This plugin integrates https://github.com/shyim/DatabaseEntitiesBuilder as plugin in shopware.

## Example usage

This generates entites, repositories, services from all tables which contains s_emotion
```bash
php bin/console shy:model:generate -f s_emotion -p php70 --prefix-remove s_ "ShyimDatabaseEntitiesGenerator\\Models" custom/plugins/ShyimDatabaseEntitiesGenerator/Models/
```

After generation of classes, you can use the entites like so. You should preferer di services, with injection. (Shopware 5.5 can this be done with autowireing).

````php
$repo = new \ShyimDatabaseEntitiesGenerator\Models\Emotion\EmotionRepository(Shopware()->Container()->get('dbal_connection'));
$emotion = $repo->find(1);

var_dump($emotion);
die();
````

Example dump of a emotion
```
object(ShyimDatabaseEntitiesGenerator\Models\Emotion\Emotion)#1174 (28) {
  ["id":protected]=>
  int(1)
  ["active":protected]=>
  int(1)
  ["name":protected]=>
  string(16) "Meine Startseite"
  ["cols":protected]=>
  int(4)
  ["cell_spacing":protected]=>
  int(10)
  ["cell_height":protected]=>
  int(185)
  ["article_height":protected]=>
  int(2)
  ["rows":protected]=>
  int(22)
  ["valid_from":protected]=>
  object(DateTime)#1173 (3) {
    ["date"]=>
    string(26) "2018-03-20 20:49:48.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["valid_to":protected]=>
  object(DateTime)#1172 (3) {
    ["date"]=>
    string(26) "2018-03-20 20:49:48.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["userID":protected]=>
  int(1)
  ["show_listing":protected]=>
  int(0)
  ["is_landingpage":protected]=>
  int(0)
  ["seo_title":protected]=>
  string(0) ""
  ["seo_keywords":protected]=>
  string(0) ""
  ["seo_description":protected]=>
  string(0) ""
  ["create_date":protected]=>
  object(DateTime)#1170 (3) {
    ["date"]=>
    string(26) "2012-08-29 08:41:30.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["modified":protected]=>
  object(DateTime)#1171 (3) {
    ["date"]=>
    string(26) "2016-05-31 08:23:09.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["template_id":protected]=>
  int(1)
  ["device":protected]=>
  string(9) "0,1,2,3,4"
  ["fullscreen":protected]=>
  int(0)
  ["mode":protected]=>
  string(5) "fluid"
  ["position":protected]=>
  int(1)
  ["parent_id":protected]=>
  int(0)
  ["preview_id":protected]=>
  int(0)
  ["preview_secret":protected]=>
  string(0) ""
  ["customer_stream_ids":protected]=>
  string(0) ""
  ["replacement":protected]=>
  string(0) ""
}
```

## Support

Please create issues in https://github.com/shyim/DatabaseEntitiesBuilder repository. Thank you!