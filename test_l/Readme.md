Se puede usar el componente de symfony "Validator"
Con las constraints de Date o de DateTime http://symfony.com/doc/current/reference/constraints/DateTime.html

Siempre tenemnos que crear un modelo concreto para la validacion

```php
<?php

class model
{
   property $dateTime;

   public function __construct($date)
   {
     $this->setDateTime($date);
   }
   public function setDatetime();
   public function datetime();

}
```

configuramos las constraints en un archivo yml, especificando el model , la constraint y su configuracion.
Creamos una nueva instancia de el validador con la configuración del archivo yml generado.

Creamos una nueva instancia del modelo con el valor post y validamos el modelo.

```php
$object = new model($_POST['datetime']);
$errors = $validator->validate($model);
```

Otra opcion para validar fechas, podemos usar la validacion dentro del modelo usando un setter privado nos aseguramos que nuestro objeto tenga valores validados.

instalando este componente https://github.com/beberlei/assert

por ej:

```php
<?php

class model
{
   property $dateTime;

   public function __construct($date)
   {
     $this->setDateTime($date);
   }

   private function setDatetime($date){
        if (! Assertion::date($date, 'Y-m-d H:i:s') )
        {
            throw new \InvalidArgumentException("Invalid Date format");
        }

        $this->dateTime = $date;
   }

   public function datetime();

}
```



