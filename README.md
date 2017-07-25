# laravel-contentbuilderjs

## This package its under development

Laravel package for ContentBuilderjs
Based on an outdated plugin https://github.com/sahbaj/laravel-content-builder-js



This package is not with ContentBuilder.js source files. You have to purchase it and put all the files in assests folder.

USAGE

For Laravel 5.4

composer require ksoft/laravel-contentbuilderjs

add the following line in config/app.php
```
Ksoft\ContentBuilderJs\BuilderServiceProvider::class,
```

Publish config and vendors

```
php artisan vendor:publish --provider="Ksoft\ContentBuilderJs\BuilderServiceProvider" --tag=config --force && php artisan vendor:publish --provider="Ksoft\ContentBuilderJs\BuilderServiceProvider" --tag=public --force
```

make sure you have in layout header ```@stack('stylesheets')``` also in footer ```@stack('scripts')```

@include('content-builder-js::tpl')

to be able to save images, need to add one line arround line 50

```
'<input id="_token" name="_token" type="hidden" value="'+ customval +'" />' +
```

You are done!
