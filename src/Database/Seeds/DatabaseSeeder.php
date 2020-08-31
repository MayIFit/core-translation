<?php

namespace MayIFit\Core\Translation\Database\Seeds;

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 *
 * @package MayIFit\Core\Translation
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LanguagesTableSeeder::class,
            TranslationsTableSeeder::class,
        ]);
    }
}
