<?php

namespace MayIFit\Core\Translation\Database\Seeds;

use Illuminate\Database\Seeder;
use MayIFit\Core\Translation\Models\Translation;

/**
 * Class TranslationsTableSeeder
 *
 * @package MayIFit\Core\Translation
 */
class TranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Translation::count() == 0) {
            $this->addGeneralTranslations();
            $this->addUserAttributeTranslations();
            $this->addDateRelatedTranslations();
            $this->addEntityEventTranslations();
            $this->addStateTranslations();
            $this->actionTranslations();
            $this->errorTranslations();
        }
    }

    protected function addGeneralTranslations() {
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'name',
            'text' => ['en' => 'Name', 'hu' => 'Név'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'type',
            'text' => ['en' => 'Type', 'hu' => 'Típus'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'translations',
            'text' => ['en' => 'Translations', 'hu' => 'Fordítások'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'users',
            'text' => ['en' => 'Users', 'hu' => 'Felhasználók'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'description',
            'text' => ['en' => 'Description', 'hu' => 'Leírás'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'information',
            'text' => ['en' => 'Information', 'hu' => 'Információ'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'email',
            'text' => ['en' => 'Email', 'hu' => 'E-mail'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'password',
            'text' => ['en' => 'Password', 'hu' => 'Jelszó'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'key',
            'text' => ['en' => 'Key', 'hu' => 'Kulcs'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'group',
            'text' => ['en' => 'Group', 'hu' => 'Csoport'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'language',
            'text' => ['en' => 'Language', 'hu' => 'Nyelv'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'value',
            'text' => ['en' => 'Value', 'hu' => 'Érték'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'filters',
            'text' => ['en' => 'Filters', 'hu' => 'Szűrők'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'system',
            'text' => ['en' => 'System', 'hu' => 'Rendszer'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'settings',
            'text' => ['en' => 'Settings', 'hu' => 'Beállítások'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'breadcrumbs',
            'text' => ['en' => 'Breadcrumbs', 'hu' => 'Morzsák'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'list_view',
            'text' => ['en' => 'List View', 'hu' => 'Lista Nézet'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'board_view',
            'text' => ['en' => 'Board View', 'hu' => 'Tábla Nézet'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'system_settings',
            'text' => ['en' => 'System Settings', 'hu' => 'Rendszer Beállítások'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'entity',
            'text' => ['en' => 'Entity', 'hu' => 'Elem'],
        ]);
        Translation::firstOrCreate([
            'group' => 'global',
            'key' => 'home',
            'text' => ['en' => 'Home', 'hu' => 'Nyitólap'],
        ]);
    }

    protected function addUserAttributeTranslations() {
        Translation::firstOrCreate([
            'group' => 'user',
            'key' => 'user',
            'text' => ['en' => 'User', 'hu' => 'Felhasználó'],
        ]);
        Translation::firstOrCreate([
            'group' => 'user',
            'key' => 'profile',
            'text' => ['en' => 'User profile', 'hu' => 'Felhasználói profil'],
        ]);
        Translation::firstOrCreate([
            'group' => 'user',
            'key' => 'real_name',
            'text' => ['en' => 'Real Name', 'hu' => 'Teljes, Valós Név'],
        ]);
        Translation::firstOrCreate([
            'group' => 'user',
            'key' => 'name',
            'text' => ['en' => 'User Name', 'hu' => 'Felhasználónév'],
        ]);
    }

    protected function addDateRelatedTranslations() {
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'date',
            'text' => ['en' => 'Date', 'hu' => 'Dátum'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'created_at',
            'text' => ['en' => 'Created at', 'hu' => 'Létrehozva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'updated_at',
            'text' => ['en' => 'Updated at', 'hu' => 'Módosítva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'deleted_at',
            'text' => ['en' => 'Deleted at', 'hu' => 'Törölve'],
        ]);            
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'permitted_at',
            'text' => ['en' => 'Permitted at', 'hu' => 'Jóváhagyva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'this_month',
            'text' => ['en' => 'This month', 'hu' => 'Ez a hónap'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'prev_month',
            'text' => ['en' => 'Previous month', 'hu' => 'Előző hónap'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'from',
            'text' => ['en' => 'Date From', 'hu' => 'Dátum-tól'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'to',
            'text' => ['en' => 'Date To', 'hu' => 'Dátum-ig'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'workday',
            'text' => ['en' => 'Workday', 'hu' => 'Munkanap'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'non_working_day',
            'text' => ['en' => 'Non working day', 'hu' => 'Munkaszüneti nap'],
        ]);
        Translation::firstOrCreate([
            'group' => 'date',
            'key' => 'now',
            'text' => ['en' => 'Now', 'hu' => 'Most'],
        ]);
    }

    protected function addEntityEventTranslations() {
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'created',
            'text' => ['en' => 'Entity created', 'hu' => 'Elem létrehozva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'deleted',
            'text' => ['en' => 'Entity deleted', 'hu' => 'Elem törölve'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'updated',
            'text' => ['en' => 'Entity updated', 'hu' => 'Elem módosítva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'exists',
            'text' => ['en' => 'Entity already exists', 'hu' => 'Elem már létezik'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'uploaded',
            'text' => ['en' => 'Entity uploaded', 'hu' => 'Elem feltöltve'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'created_by',
            'text' => ['en' => 'Created by', 'hu' => 'Létrehozta'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'updated_by',
            'text' => ['en' => 'Updated by', 'hu' => 'Módosította'],
        ]);
        Translation::firstOrCreate([
            'group' => 'entity',
            'key' => 'deleted_by',
            'text' => ['en' => 'Deleted by', 'hu' => 'Törölte'],
        ]);
    }

    protected function addStateTranslations() {
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'state',
            'text' => ['en' => 'state', 'hu' => 'Státusz'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'pending',
            'text' => ['en' => 'Pending', 'hu' => 'Elfogadásra vár'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'permitted',
            'text' => ['en' => 'Permitted', 'hu' => 'Engedélyezve'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'active',
            'text' => ['en' => 'Active', 'hu' => 'Aktív'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'inactive',
            'text' => ['en' => 'Inactive', 'hu' => 'Inaktív'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'disabled',
            'text' => ['en' => 'Disabled', 'hu' => 'Kikapcsolva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'enabled',
            'text' => ['en' => 'Enabled', 'hu' => 'Bekapcsolva'],
        ]);
        Translation::firstOrCreate([
            'group' => 'state',
            'key' => 'not_found',
            'text' => ['en' => 'Not Found', 'hu' => 'Nem Található'],
        ]);
    }

    protected function actionTranslations() {
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'actions',
            'text' => ['en' => 'Actions', 'hu' => 'Kezelés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'search',
            'text' => ['en' => 'Search', 'hu' => 'Keresés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'print',
            'text' => ['en' => 'Print', 'hu' => 'Nyomtatás'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'check_all',
            'text' => ['en' => 'Check All', 'hu' => 'Összes Kijelölése'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'reset_filter',
            'text' => ['en' => 'Reset Filter', 'hu' => 'Szűrők Törlése'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'show_more',
            'text' => ['en' => 'Show More', 'hu' => 'Mutass Többet'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'confirm_delete',
            'text' => ['en' => 'Confirm delete', 'hu' => 'Törlés megerősítése'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'save',
            'text' => ['en' => 'Save', 'hu' => 'Mentés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'cancel',
            'text' => ['en' => 'Cancel', 'hu' => 'Mégse'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'back',
            'text' => ['en' => 'Back', 'hu' => 'Vissza'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'next',
            'text' => ['en' => 'Next', 'hu' => 'Következő'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'previous',
            'text' => ['en' => 'Previous', 'hu' => 'Előző'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'add_new',
            'text' => ['en' => 'Add new', 'hu' => 'Új érték hozzáadása'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'create',
            'text' => ['en' => 'Creeate new', 'hu' => 'Új létrehozása'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'delete',
            'text' => ['en' => 'Delete', 'hu' => 'Törlés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'edit',
            'text' => ['en' => 'Edit', 'hu' => 'Szerkesztés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'view',
            'text' => ['en' => 'View', 'hu' => 'Megtekintés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'list',
            'text' => ['en' => 'List', 'hu' => 'Listázás'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'logout',
            'text' => ['en' => 'Logout', 'hu' => 'Kijelentkezés'],
        ]);
        Translation::firstOrCreate([
            'group' => 'action',
            'key' => 'login',
            'text' => ['en' => 'Login', 'hu' => 'Bejelentkezés'],
        ]);
    }

    protected function errorTranslations() {
        Translation::firstOrCreate([
            'group' => 'error',
            'key' => 'error',
            'text' => ['en' => 'Error', 'hu' => 'Hiba'],
        ]);
        Translation::firstOrCreate([
            'group' => 'error',
            'key' => 'module_disabled',
            'text' => ['en' => 'Module is disabled!', 'hu' => 'Modul nincs aktiválva!'],
        ]);
        Translation::firstOrCreate([
            'group' => 'error',
            'key' => 'unauthorized',
            'text' => ['en' => 'Unauthorized action!', 'hu' => 'Jogosulatlan művelet!'],
        ]);
    }
}
