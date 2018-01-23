# Your Everyday Space Craft

```
# Install the required php packages
vagran@homestead:/var/www/core$ composer install
vagran@homestead:/var/www/core$ cp .env.example .env
vagran@homestead:/var/www/core$ php artisan key:generate

# Install the required node modules
$ yarn install
$ yarn run dev

# make sure the Homestead.yaml site is pointing to the public folder
```