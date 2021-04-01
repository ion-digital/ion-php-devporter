@echo off

php ..\bin\php-trans-porter.php --target-version 5.6 --input .\input\ --output .\output\
php ..\bin\php-trans-porter.php --target-version 5.6 --input .\input\base.php --output .\output\base_5_6.php
php ..\bin\php-trans-porter.php --target-version 7.0 --input .\input\base.php --output .\output\base_7_0.php
php ..\bin\php-trans-porter.php --target-version 7.1 --input .\input\base.php --output .\output\base_7_1.php
php ..\bin\php-trans-porter.php --target-version 7.2 --input .\input\base.php --output .\output\base_7_2.php
