<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $tables = ['users', 'business_config', 'country_department', 'town'];

    $this->truncateTables($tables);
    $this->call(UserSeeder::class);
    $this->call(BusinessConfigSeeder::class);
    $this->call(CountryDepartmentSeeder::class);
    $this->call(TownSeeder::class);
    // \App\Models\User::factory(10)->create();
  }

  /**
   * Este metodo se encarga de eliminar los datos
   * de las tablas con el fin de que cuando se 
   * planten los seeder esto evite crear duplicados.
   */
  protected function truncateTables($tables)
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    foreach ($tables as $table) {
      DB::table($table)->truncate();
    } //end foreach
    DB::statement('SET FOREIGN_KEY_CHECKS=1');
  } //end function
}
