@echo off

php .\bin\php-trans-porter.php --target-version 5.6 --input .\tests\input\ --output .\tests\output\
php .\bin\php-trans-porter.php --target-version 5.6 --input .\tests\input\base.php --output .\tests\output\base_5_6.php
php .\bin\php-trans-porter.php --target-version 7.0 --input .\tests\input\base.php --output .\tests\output\base_7_0.php
php .\bin\php-trans-porter.php --target-version 7.1 --input .\tests\input\base.php --output .\tests\output\base_7_1.php
php .\bin\php-trans-porter.php --target-version 7.2 --input .\tests\input\base.php --output .\tests\output\base_7_2.php
php .\bin\php-trans-porter.php --target-version 7.3 --input .\tests\input\base.php --output .\tests\output\base_7_3.php
php .\bin\php-trans-porter.php --target-version 7.4 --input .\tests\input\base.php --output .\tests\output\base_7_4.php
php .\bin\php-trans-porter.php --target-version 8.0 --input .\tests\input\base.php --output .\tests\output\base_8_0.php
php .\bin\php-trans-porter.php --target-version 8.1 --input .\tests\input\base.php --output .\tests\output\base_8_1.php
php .\bin\php-trans-porter.php --target-version 8.2 --input .\tests\input\base.php --output .\tests\output\base_8_2.php
