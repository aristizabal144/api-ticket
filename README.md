# API TICKETS 🎟️🥳

# Requerimientos 🔌

* PHP >= 8.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Composer https://getcomposer.org/

# Configuracion 🛠️

1. Configurar base de datos local en Mysql ✅
2. Ajustar archivo .env.example ✅
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=TUBASEDEDATOS
    DB_USERNAME=TUUSUARIO
    DB_PASSWORD=TUCONTRASENA
3. renombrar el archivo .env.example -> .env ✅

# Migraciones 💾
Para correr migraciones ejecutar el siguiente comando:
    ```bash
    
        php artisan migrate

# Run 🏃‍♂️
Para correr el api ejecutar:
    ```bash
    
        php -S localhost:8000 -t public

# Test 👀
Para correr los test unitarios ubicate en la raiz del proyecto y ejecuta:
    ```bash
    
        vendor/bin/phpunit



