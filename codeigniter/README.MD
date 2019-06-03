# Ejecutar para crear la imagen de PHP y MYSQL
# Esto sólo debe hacerse una vez para crear la imagen que contiene PHP y MySQL
docker build -t php-mysql -f php.dockerfile .

# Iniciar el container con Apache, PHP y MySQL
docker-compose up
