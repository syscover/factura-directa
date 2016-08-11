# Factura Directa to Laravel 5.2

## Installation

**1 - After install Laravel framework, insert on file composer.json, inside require object this value**
```
"syscover/factura-directa": "dev-master"
```

and execute on console:
```
composer update
```

**2 - Register service provider, on file config/app.php add to providers array**

```
Syscover\Facturadirecta\FacturaDirectaServiceProvider::class,

```

**3 - To publish package and migrate**

and execute composer update again:
```
composer install
```

**4 - Set config options on config\facturaDirecta.php**

The best option is set options in environment file, with this example
```
FACTURADIRECTA_ACCOUNT_NAME=xxxxxx
FACTURADIRECTA_API_KEY=xxxxxxxxxxxxxxxxxxxx
```