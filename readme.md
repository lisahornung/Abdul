# Quickstart
```
git clone https://github.com/knowledge91/abdul
brew composer
composer global require "laravel/installer"
echo "$HOME/.composer/vendor/bin:$PATH" >> ~/.bash_profile
cd ./abdul
composer update --no-scripts 
php artisan key:generate
php artisan config:cache
php artisan serve
```

# Laravel
The project is based on the php [Laravel Framework](https://laravel.com/docs/master), checkout the docs if you don't know what to do :).
