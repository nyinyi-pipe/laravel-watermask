### <h2><b>Instructions </b></h2>

### Install Package,
composer require intervention/image


### In php.ini, need to remove ';'
;extension=gd


### In composer.json, add Intervention
"autoload": {
    "classmap": [
        // Other entries...
    ],
    "psr-4": {
        "App\\": "app/",
        "Intervention\\Image\\": "vendor/intervention/image/src/"
    }
},

### Dump-autoload
composer dump-autoload




