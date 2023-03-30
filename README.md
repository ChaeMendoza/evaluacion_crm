<img src="https://github.com/ChaeMendoza/evaluacion_crm/blob/main/resources/images/dise%C3%B1o.png?raw=true" width="400">

### Prerequisitos
- Composer^2.0.10
- Node^14.16
- MySql

## Instalación
- Ejecutar Composer install
- Copiar el archivo .env_original (cp .env_original .env)
- Modificar variables del archivo .env de acuedo al ambiente
- Crear App_Key -> ejecutar php artisan key:generate
- Ejecutar php artisan migrate
- Ejecutar npm install

## About Project

Si deseas una guia un poco más detallada revisa <a href="https://israels-organization-1.gitbook.io/docs/">Documentación del desafío</a>
El proyecto funciona correctamente siempre y cuando se instale en local el backend siguiendo los pasos de instalación ya mensionados anteriormente. La configuaración toma unos minutos y luego desde la <a href="https://desafio-tech.web.app/">página oficial</a> se puede utilizarm tranquilamente

## Indispensable

Es indispensable contar con el archivo .env y modificarlo para que pueda desarrollarse en local.
también se puede probar el proyecto localmente en la ruta "/pairs"; es decir luego de ejecutar "php artisan serve" y saber que el proyecto se ejecuta en el puerto 8000 se debe agregar al final "/pairs" de esta forma:

http://xxx.x.x.x:8000/pairs

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
