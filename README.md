# API TICKETS 🎟️🥳
URL publica: ec2-54-89-89-89.compute-1.amazonaws.com

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

# Documentacion 📝

### 1. Listar Tickets

**URL:** `/tickets`

**Método HTTP:** GET

**Descripción:** Este endpoint se utiliza para listar los tickets disponibles. Puedes usar el parámetro `size` para especificar la cantidad de tickets a mostrar por página.

**Parámetros:**

- `size`: Número de tickets por página.
- `page`: Número de página.

### 2. Mostrar Ticket
**URL:** `/tickets/{id}` 

**Método HTTP:** GET

**Descripción:** Este endpoint se utiliza para obtener detalles de un ticket específico mediante su ID.

**Parámetros:**

- `id`: ID del ticket que se desea obtener.

### 3. Crear Ticket

**URL:** `/tickets`

**Método HTTP:** POST

**Descripción:**  Este endpoint se utiliza para crear un nuevo ticket.

Datos del cuerpo:
    ```json
    
    {
        "usuario": string,
        "estatus": string [abierto, cerrado]
    }

### 4. Editar un Ticket

**URL:** `/tickets/{id}`

**Método HTTP:** PUT

**Descripción:** Este endpoint se utiliza para actualizar un ticket existente mediante su ID.

**Parámetros URL:**

- `id`: ID del ticket que se desea actualizar.

Datos del cuerpo (ejemplo):
    ```json
    
    {
        "usuario": string,
        "estatus": string [abierto, cerrado]
    }

### 5. Eliminar un ticket

**URL:** `/tickets/{id}`

**Método HTTP:** DELETE

**Descripción:** Este endpoint se utiliza para eliminar un ticket existente mediante su ID.

**Parámetros URL:**

- `id`: ID del ticket que se desea eliminar.
