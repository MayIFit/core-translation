<?php

namespace MayIFit\Core\Translation\Database\Seeds;

use Illuminate\Database\Seeder;
use MayIFit\Core\Translation\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (Translation::count() == 0) {
            // GLOBAL
            Translation::create([
                'group' => 'global',
                'key' => 'create',
                'text' => ['en' => 'Create new', 'hu' => 'Új létrehozása'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'delete',
                'text' => ['en' => 'Delete', 'hu' => 'Törlés'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'update',
                'text' => ['en' => 'Update', 'hu' => 'Módosítás'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'dashboard',
                'text' => ['en' => 'Dashboard', 'hu' => 'Vezérlőpult'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'administration',
                'text' => ['en' => 'Administration', 'hu' => 'Adminisztráció'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'user',
                'text' => ['en' => 'User', 'hu' => 'Felhasználó'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'profile',
                'text' => ['en' => 'User profile', 'hu' => 'Felhasználói profil'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'logout',
                'text' => ['en' => 'Logout', 'hu' => 'Kijelentkezés'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'name',
                'text' => ['en' => 'Name', 'hu' => 'Név'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'type',
                'text' => ['en' => 'Type', 'hu' => 'Típus'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'date',
                'text' => ['en' => 'Date', 'hu' => 'Dátum'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'created_at',
                'text' => ['en' => 'Created at', 'hu' => 'Létrehozva'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'updated_at',
                'text' => ['en' => 'Updated at', 'hu' => 'Módosítva'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'deleted_at',
                'text' => ['en' => 'Deleted at', 'hu' => 'Törölve'],
            ]);            
            Translation::create([
                'group' => 'global',
                'key' => 'permitted_at',
                'text' => ['en' => 'Permitted at', 'hu' => 'Jóváhagyva'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'created_by',
                'text' => ['en' => 'Created by', 'hu' => 'Létrehozta'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'updated_by',
                'text' => ['en' => 'Updated by', 'hu' => 'Módosította'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'deleted_by',
                'text' => ['en' => 'Deleted by', 'hu' => 'Törölte'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'permitted_by',
                'text' => ['en' => 'Permitted by', 'hu' => 'Jóváhagyta'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'translations',
                'text' => ['en' => 'Translations', 'hu' => 'Fordítások'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'status',
                'text' => ['en' => 'Status', 'hu' => 'Státusz'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'actions',
                'text' => ['en' => 'Actions', 'hu' => 'Kezelés'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'users',
                'text' => ['en' => 'Users', 'hu' => 'Felhasználók'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'active',
                'text' => ['en' => 'Active', 'hu' => 'Aktív'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'description',
                'text' => ['en' => 'Description', 'hu' => 'Leírás'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'real_name',
                'text' => ['en' => 'Real Name', 'hu' => 'Teljes, Valós Név'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'user_name',
                'text' => ['en' => 'User Name', 'hu' => 'Felhasználónév'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'check_all',
                'text' => ['en' => 'Check All', 'hu' => 'Összes Kijelölése'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'permissions',
                'text' => ['en' => 'Permissions', 'hu' => 'Jogosultságok'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'disabled',
                'text' => ['en' => 'Disabled', 'hu' => 'Kikapcsolva'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'enabled',
                'text' => ['en' => 'Enabled', 'hu' => 'Bekapcsolva'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'permitted',
                'text' => ['en' => 'Permitted', 'hu' => 'Engedélyezve'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'pending',
                'text' => ['en' => 'Pending', 'hu' => 'Elfogadásra vár'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'date_from',
                'text' => ['en' => 'Date From', 'hu' => 'Dátum-tól'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'date_to',
                'text' => ['en' => 'Date To', 'hu' => 'Dátum-ig'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'all',
                'text' => ['en' => 'All', 'hu' => 'Összes'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'this_month',
                'text' => ['en' => 'This month', 'hu' => 'Ez a hónap'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'prev_month',
                'text' => ['en' => 'Previous month', 'hu' => 'Előző hónap'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'search',
                'text' => ['en' => 'Search', 'hu' => 'Keresés'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'print',
                'text' => ['en' => 'Print', 'hu' => 'Nyomtatás'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'roles',
                'text' => ['en' => 'Roles', 'hu' => 'Szerepkörök'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'information',
                'text' => ['en' => 'Information', 'hu' => 'Információ'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'error',
                'text' => ['en' => 'Error', 'hu' => 'Hiba'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'now',
                'text' => ['en' => 'Now', 'hu' => 'Most'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'email',
                'text' => ['en' => 'Email', 'hu' => 'E-mail'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'password',
                'text' => ['en' => 'Password', 'hu' => 'Jelszó'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'key',
                'text' => ['en' => 'Key', 'hu' => 'Kulcs'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'group',
                'text' => ['en' => 'Group', 'hu' => 'Csoport'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'language',
                'text' => ['en' => 'Language', 'hu' => 'Nyelv'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'value',
                'text' => ['en' => 'Value', 'hu' => 'Érték'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'add_new',
                'text' => ['en' => 'Add new', 'hu' => 'Új érték hozzáadása'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'unauthorized',
                'text' => ['en' => 'Unauthorized action!', 'hu' => 'Jogosulatlan művelet!'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'login',
                'text' => ['en' => 'Login', 'hu' => 'Bejelentkezés'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'upcoming_events',
                'text' => ['en' => 'Upcoming Events', 'hu' => 'Közelgő események'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'accessories',
                'text' => ['en' => 'Accessories', 'hu' => 'Kiegészítők'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'show_more',
                'text' => ['en' => 'Show More', 'hu' => 'Mutass Többet'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'contact_us',
                'text' => ['en' => 'Contact Us', 'hu' => 'Kerresen fel minket'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'product_description',
                'text' => ['en' => 'Product Description', 'hu' => 'Termékleírás'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'filters',
                'text' => ['en' => 'Filters', 'hu' => 'Szűrők'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'reset_filter',
                'text' => ['en' => 'Reset Filter', 'hu' => 'Szűrők Törlése'],
            ]);
            Translation::create([
                'group' => 'global',
                'key' => 'price_range',
                'text' => ['en' => 'Price Range', 'hu' => 'Ársáv'],
            ]);

            

            // PAGES
            Translation::create([
                'group' => 'pages',
                'key' => 'products',
                'text' => ['en' => 'Products', 'hu' => 'Termékek'],
            ]);
            Translation::create([
                'group' => 'pages',
                'key' => 'contact',
                'text' => ['en' => 'Contact', 'hu' => 'Elérhetőségeink'],
            ]);

            // PRODUCT
            Translation::create([
                'group' => 'product',
                'key' => 'catalog_id',
                'text' => ['en' => 'Catalog ID', 'hu' => 'Katalógusszám'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'category',
                'text' => ['en' => 'Product Category', 'hu' => 'Termék Kategória'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'tags',
                'text' => ['en' => 'Product Tags', 'hu' => 'Termék Címkék'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'weight',
                'text' => ['en' => 'Product Weight', 'hu' => 'Termék Súlya'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'width',
                'text' => ['en' => 'Product Width', 'hu' => 'Termék Szélessége'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'height',
                'text' => ['en' => 'Product Height', 'hu' => 'Termék Magassága'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'length',
                'text' => ['en' => 'Product Length', 'hu' => 'Termék Hossza'],
            ]);
            Translation::create([
                'group' => 'product',
                'key' => 'in_stock',
                'text' => ['en' => 'In Stock', 'hu' => 'Raktáron'],
            ]);

            // MODULE
            Translation::create([
                'group' => 'module',
                'key' => 'disabled',
                'text' => ['en' => 'Module is disabled!', 'hu' => 'Modul nincs aktiválva!'],
            ]);

            // EVENT
            Translation::create([
                'group' => 'event',
                'key' => 'workday',
                'text' => ['en' => 'Workday', 'hu' => 'Munkanap'],
            ]);
            Translation::create([
                'group' => 'event',
                'key' => 'non_working_day',
                'text' => ['en' => 'Non working day', 'hu' => 'Munkaszüneti nap'],
            ]);

            // CONFIRM
            Translation::create([
                'group' => 'confirm',
                'key' => 'delete',
                'text' => ['en' => 'Confirm delete', 'hu' => 'Törlés megerősítése'],
            ]);


            // ENTITY
            Translation::create([
                'group' => 'entity',
                'key' => 'created',
                'text' => ['en' => 'Entity created', 'hu' => 'Elem létrehozva'],
            ]);
            Translation::create([
                'group' => 'entity',
                'key' => 'deleted',
                'text' => ['en' => 'Entity deleted', 'hu' => 'Elem törölve'],
            ]);
            Translation::create([
                'group' => 'entity',
                'key' => 'updated',
                'text' => ['en' => 'Entity updated', 'hu' => 'Elem módosítva'],
            ]);
            Translation::create([
                'group' => 'entity',
                'key' => 'exists',
                'text' => ['en' => 'Entity already exists', 'hu' => 'Elem már létezik'],
            ]);
            Translation::create([
                'group' => 'entity',
                'key' => 'uploaded',
                'text' => ['en' => 'Entity uploaded', 'hu' => 'Elem feltöltve'],
            ]);
        }
    }
}
