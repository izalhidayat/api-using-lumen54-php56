# Lumen 5.4 PHP 5.6

Log Install Ubuntu 18 :

  371  sudo apt install composer
  372  composer create-project laravel/lumen todoLumen "5.4.*" --prefer-dist
  374  cd todoLumen/
  378  nano .env
  420  sudo apt-get install php5.6-mbstring
  421  sudo apt-get install php5.6-xml
  421  sudo apt-get install php5.6-mysql
  422  composer update -vvv
  427  php artisan make:migration table_lumen --create=todo
  432  php artisan migrate
  447  composer dump-autoload
  449  php artisan migrate:install
  458  php artisan migrate
  459  ll
  460  cd app/Http/
  461  cd Controllers/
  462  clear
  463  ll
  464  cp ExampleController.php tofoController.php
  465  nano tofoController.php 
  466  cd ..
  467  cl
  468  ll
  469  cd ..
  470  ll
  471  clear
  472  ll
  473  cd ..
  474  ll
  475  clear
  476  cd App
  477  ll
  478  cd app/
  479  ll
  480  cd Http/
  481  ll
  482  cd Middleware/
  483  ll
  484  clear
  485  ll
  486  cd ..
  487  ll
  488  cd ..
  489  ll
  490  cp User.php tofoModel.php
  491  nano tofoModel.php 
  492  php -S localhost:8000 -t ./public
  493  cd ..
  494  ll
  495  cd todoLumen/
  496  ll
  497  php -S localhost:8000 -t ./public
  498  cd ht
  499  ll
  500  cd public/
  501  ll
  502  clear
  503  cd ../
  504  ll
  505  cd app/
  506  ll
  507  cd Http/
  508  cd Controllers/
  509  nano tofoController.php 
  510  cd ..
  511  ll
  512  nano tofoModel.php 
  513  cd /apps/
  514  cd /home/rizalhidayat/Documents/lumen/todoLumen/app/
  515  ll
  516  cd Http/Controllers/
  517  ll
  518  nano tofoController.php 
  519  cd ..
  520  ll
  521  cd ..
  522  ll
  523  cd routes/
  524  ll
  525  nano web.php 
  526  cd ..
  527  php -S localhost:8000 -t ./public
  528  cd app/
  529  ll
  530  cd Http/
  531  ll
  532  cd Controllers/
  533  ll
  534  pwd
  535  nano Controller.php 
  536  nano tofoController.php 
  537  cd ..
  538  cd routes/
  539  ll
  540  nano web.php 
  541  cd ..
  542  php -S localhost:8000 -t ./public
  543  cd app/Http/Controllers/
  544  ll
  545  nano tofoController.php 
  546  composer dump-autoload
  547  cd ../../
  548  cd ../
  549  php -S localhost:8000 -t ./public
  550  cd app/
  551  ll
  552  nano tofoModel.php 
  553  cd ..
  554  php -S localhost:8000 -t ./public
  555  cd app/Console/
  556  cd ..
  557  cd Http/Controllers/
  558  ll
  559  nano tofoController.php 
  560  cd ../../..
  561  php -S localhost:8000 -t ./public
  562  cd app/Http/Controllers/
  563  nano tofoController.php 
  564  cd ..
  565  nano tofoModel.php 
  566  cd ..
  567  php -S localhost:8000 -t ./public
  568  cd app/
  569  nano tofoModel.php 
  570  cd ..
  571  php -S localhost:8000 -t ./public
  572  mysql -u rizal -p
  573  php -S localhost:8000 -t ./public
  574  history
  575  composer dump-autoload
  576  php -S localhost:8000 -t ./public
  577  ;;
  578  ll
  579  nano .env
  580  debug
  581  php -S localhost:8000 -t ./public
  582  rm -rf ~/.composer/cache/laravel/framework
  583  ll
  584  rm -rf composer.lock 
  585  rm -rf vendor/
  586  composer update
  587  php -S localhost:8000 -t ./public
  588  php -S localhost:8000 -t
  589  php -S localhost:8000 -t .
  590  history
