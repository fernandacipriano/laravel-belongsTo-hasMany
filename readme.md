## Teste de relacionamento 1:N Laravel 

composer create-project --prefer-dist laravel/laravel belongsTo-hasMany "5.8.*"

cd belongsTo-hasMany

php artisan make:model Cliente -mfr (-mfr cria a migration, factory e controller em modo resource)
php artisan make:seeder ClienteSeeder

php artisan make:model Pedido -mfr (-mfr cria a migration, factory e controller em modo resource)
php artisan make:seeder PedidoSeeder

php artisan migrate

php artisan db:seed --class=ClienteSeeder

