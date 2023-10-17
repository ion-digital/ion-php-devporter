### PHP Trans-Porter

[![License: LGPL v3](https://img.shields.io/badge/License-LGPL%20v3-blue.svg)](https://www.gnu.org/licenses/lgpl-3.0)

PHP Trans-Porter is a small utility that trans-ports (get it...?) source code from one PHP version to be used in another.

As someone that does freelance work from time to time, but has a limited amount of it, I became really frustrated with 
clients' hosting requirements varying between the different PHP versions available (PHP 5.6 to PHP 7.1 and up), and not
being able to use new language features (e.g. scalar type hinting) and the potential performance benefits they provide.

Since its sometimes not possible for a client to update their hosted version of PHP (due to multiple, but _sometimes_ questionable
reasons :) ), I needed to find a way to stream-line my work-flow so that:

* I could waste less time trying to convince my clients to upgrade or change hosts,
* use the newest PHP language features,
* and spend less time explaining version-specific bugs that pop up every-so-often, when you're juggling versions.


## Features

PHP Trans Porter currently features back-porting for PHP versions 5.6, 7.x (7.0 to 7.2), as well as bulk transformations (specify an input directory and an output directory, and all __.php__ files will be converted recursively).

The utility tries to make the least amount of changes possible, but with the goal of generating source code that should not have to be modified again.

The current base version is: _PHP 8.2_.

Conversion features for PHP _7.3_ and above:

* _None_ (yet!)


Conversion features for PHP _7.2_ to PHP _7.1_:

* Remove instances of the 'object' type from return type-hints, as well as from parameter type-hints and casts.
* Remove scope modifiers (private, protected or public) from class constant definitions.


Conversion features for PHP _7.1_ to PHP _7.0_:

* Remove instances of the 'void' return type.
* Remove instances of nullable returns types (e.g. '?int'), as well as from parameter type-hints.


Conversion features for PHP _7.0_ to PHP _5.6_:

* Remove all scalar type-hints ('bool,' 'float,' 'string' and 'int') from return- and parameter type-hints.
* Include a 'use' statement that references '\Exception' aliased as 'Throwable.'


All conversions stack up - thus, converting from PHP 7.2 to PHP 5.6, will first it to 7.1, then 7.0 and finally 5.6.


## Getting Started

###Using Composer:

Make sure Composer is installed - if not, you can get it from [here](https://getcomposer.org/ "getcomposer.org").

First, you need to add _ion/php-trans-porter_ as a dependency in your _composer.json_ file.

To use the current stable version, add the following to download it straight from [here](https://packagist.org/ "packagist.org"):

```
"require": {
    "php": ">=8.2",
    "ion/php-trans-porter": "^0.1",
}
```

To use the bleeding edge (development) version, add the following:

```
"require": {
    "php": ">=8.2",
    "ion/php-trans-porter": "dev-default",	
},
"repositories": {
    {
      "type": "vcs",
      "url": "https://github.com/ion-digital/ion-php-trans-porter"
    }
}
```

Then run the following in the root directory of your project:

> php composer.phar install


### Prerequisites

* PHP (available on the command-line)
* Composer


## Built With

* [Composer](https://getcomposer.org/) - Dependency Management
* [PHP Parser](https://packagist.org/packages/nikic/php-parser/) - Thanks to Nikita Popov for the excellent PHP Parser library!
* [NetBeans](https://www.netbeans.org) - IDE


## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://https://github.com/ion-digital/ion-php-trans-porter/tags "bitbucket.org"). 


## Authors

* **Justus Meyer** - *Initial work* - [GitHub](https://justusmeyer.com/github), [Upwork](https://justusmeyer.com/upwork)

## License

This project is licensed under the LGPL-3.0 License - see the [LICENSE.md](LICENSE.md) file for details.

