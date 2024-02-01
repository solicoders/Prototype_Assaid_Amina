# Back end cmd

```

    php artisan migrate


```
 Create a new seeder by running the following Artisan command:

```
    php artisan make:seeder CitiesDatabaseSeeder
    php artisan make:seeder CountrysDatabeseSeeder

```

Run the seeder using the following Artisan command:


```
    php artisan db:seed --class=CitiesDatabaseSeeder
    php artisan db:seed --class=CountrysDatabeseSeeder

```