## Comment créer l'environnement de développement


1. Commencez par installer Laravel via le terminal avec cette commande :

```
composer create-project laravel/Prototype_Assaid_Amina 
```

2. Ensuite, créez le fichier .env en utilisant la commande :
```
cp .env.example .env
```

3. Procédez à la création des tables en exécutant ces commandes :
```
php artisan make:migration Country

php artisan make:migration City

```

4. Une fois que les noms de colonnes pour les tables sont définis, migrez-les vers la base de données :
```
php artisan migrate
```

5. Remplissez la base de données :
```
php artisan db:seed

```

6. Avec la table des tâches et le seeder configurés, générez des modèles pour tasks et projects :

```
php artisan make:model Country

php artisan make:model City
```

7. Créez des contrôleurs pour gérer les données de la base de données :
```
php artisan make:controller CountryController 

php artisan make:controller CityController 

```
8. Pour visualiser la progression de votre projet en local, exécutez cette commande :
```
php artisan serve
```
9.  Installation de Admin LTE

```
npm install admin-lte@^3.2 --save

```