# Factura Directa to Laravel 5.2

## Installation

**1 - After install Laravel framework, insert on file composer.json, inside require object this value**
```
"syscover/facturadirecta": "dev-master"
```

and execute on console:
```
composer update
```

**2 - Register service provider, on file config/app.php add to providers array**

```
App\Providers\FacturadirectaServiceProvider::class,

```

**3 - To publish package and migrate**

and execute composer update again:
```
composer update
```