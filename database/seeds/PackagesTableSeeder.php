<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i = 0; $i < 20; $i++ ) {
            // Creazione istanza(record)
            $new_package = new Package();

            // Popolazione colonne 
            $new_package->città = 'Barcellona';
            $new_package->trasporto = 'aereo';
            $new_package->pernottamento = 'notti' . rand(1, 14);
            $new_package->n_persone = rand(1, 5);
            $new_package->prezzo = rand(500, 10000);

            // Salvare record a db
            $new_package->save();
        }
    }
}
