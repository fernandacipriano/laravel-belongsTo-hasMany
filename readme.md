## Teste de relacionamento 1:N Laravel 

** Comandos para rodar esse projeto já pronto

git clone https://github.com/fernandacipriano/laravel-belongsTo-hasMany.git

cd laravel-belongsTo-hasMany

composer install

php artisan migrate

php artisan db:seed --class=ClienteSeeder


** Comandos para criar do início

composer create-project --prefer-dist laravel/laravel belongsTo-hasMany "5.8.*"

cd belongsTo-hasMany

php artisan make:model Cliente -mfr (-mfr cria a migration, factory e controller em modo resource)
php artisan make:seeder ClienteSeeder

php artisan make:model Pedido -mfr (-mfr cria a migration, factory e controller em modo resource)
php artisan make:seeder PedidoSeeder

php artisan migrate

php artisan db:seed --class=ClienteSeeder

