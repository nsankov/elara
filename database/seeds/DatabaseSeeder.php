<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StaticPagesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(CatalogsTableSeeder::class);
        $this->call(CatalogItemsTableSeeder::class);
        $this->call(CatalogPicturesTableSeeder::class);
        $this->call(CategoryPicturesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(ProductFeaturesTableSeeder::class);
        $this->call(ProductPicturesTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
    }
}
