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
Syscover\Facturadirecta\FacturadirectaServiceProvider::class,

```

**3 - To publish package and migrate**

and execute composer update again:
```
composer update
```

**4 - Set config options on config\facturadirecta.php**

The best option is set options in environment file, with this example
```
FACTURADIRECTA_ACCOUNT_NAME=xxxxxx
FACTURADIRECTA_API_KEY=xxxxxxxxxxxxxxxxxxxx
```