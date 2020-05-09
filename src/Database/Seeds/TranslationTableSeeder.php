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
        $this->addGeneralTranslations();
        $this->addUserAttributeTranslations();
        $this->addDateRelatedTranslations();
        $this->addEntityEventTranslations();
        $this->addStateTranslations();
        $this->actionTranslations();
        $this->errorTranslations();
    }

    protected function addGeneralTranslations() {
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'name'
			],
            ['text' => ['en' => 'Name', 'hu' => 'Név']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'type'
			],
            ['text' => ['en' => 'Type', 'hu' => 'Típus']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'translations'
			],
            ['text' => ['en' => 'Translations', 'hu' => 'Fordítások']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'users'
			],
            ['text' => ['en' => 'Users', 'hu' => 'Felhasználók']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'description'
			],
            ['text' => ['en' => 'Description', 'hu' => 'Leírás']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'information'
			],
            ['text' => ['en' => 'Information', 'hu' => 'Információ']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'email'
			],
            ['text' => ['en' => 'Email', 'hu' => 'E-mail']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'password'
			],
            ['text' => ['en' => 'Password', 'hu' => 'Jelszó']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'key'
			],
            ['text' => ['en' => 'Key', 'hu' => 'Kulcs']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'group'
			],
            ['text' => ['en' => 'Group', 'hu' => 'Csoport']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'language'
			],
            ['text' => ['en' => 'Language', 'hu' => 'Nyelv']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'value'
			],
            ['text' => ['en' => 'Value', 'hu' => 'Érték']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'filters'
			],
            ['text' => ['en' => 'Filters', 'hu' => 'Szűrők']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'system'
			],
            ['text' => ['en' => 'System', 'hu' => 'Rendszer']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'settings'
			],
            ['text' => ['en' => 'Settings', 'hu' => 'Beállítások']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'breadcrumbs'
			],
            ['text' => ['en' => 'Breadcrumbs', 'hu' => 'Morzsák']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'list_view'
			],
            ['text' => ['en' => 'List View', 'hu' => 'Lista Nézet']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'board_view'
			],
            ['text' => ['en' => 'Board View', 'hu' => 'Tábla Nézet']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'system_settings'
			],
            ['text' => ['en' => 'System Settings', 'hu' => 'Rendszer Beállítások']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'entity'
			],
            ['text' => ['en' => 'Entity', 'hu' => 'Elem']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'home'
			],
            ['text' => ['en' => 'Home', 'hu' => 'Nyitólap']],
        );
        Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'forgot_password'
			],
			['text' => ['en' => 'Forgot Password', 'hu' => 'Elfelejtett Jelszó']],
    	);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'small_letters_without_accents_and_underscores_only'
			],
			['text' => ['en' => 'Small letter without accents and underscores for whitespaces', 'hu' => 'Kis betűk ékezet nélkül, szóköz helyett aláhúzásokkal']],
		);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'images'
			],
			['text' => ['en' => 'Images', 'hu' => 'Képek']],
		);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'files'
			],
			['text' => ['en' => 'Files', 'hu' => 'Fájlok']],
		);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'documents'
			],
			['text' => ['en' => 'Documents', 'hu' => 'Dokumentumok']],
		);
    }

    protected function addUserAttributeTranslations() {
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'user'
			],
            ['text' => ['en' => 'User', 'hu' => 'Felhasználó']],
		);
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'profile'
			],
            ['text' => ['en' => 'User profile', 'hu' => 'Felhasználói profil']],
		);
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'real_name'
			],
            ['text' => ['en' => 'Real Name', 'hu' => 'Teljes, Valós Név']],
		);
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'name'
			],
            ['text' => ['en' => 'User Name', 'hu' => 'Felhasználónév']],
		);
    }

    protected function addDateRelatedTranslations() {
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'date'
			],
            ['text' => ['en' => 'Date', 'hu' => 'Dátum']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'created_at'
			],
            ['text' => ['en' => 'Created at', 'hu' => 'Létrehozva']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'updated_at'
			],
            ['text' => ['en' => 'Updated at', 'hu' => 'Módosítva']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'deleted_at'
			],
            ['text' => ['en' => 'Deleted at', 'hu' => 'Törölve']],
		);            
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'permitted_at'
			],
            ['text' => ['en' => 'Permitted at', 'hu' => 'Jóváhagyva']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'this_month'
			],
            ['text' => ['en' => 'This month', 'hu' => 'Ez a hónap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'prev_month'
			],
            ['text' => ['en' => 'Previous month', 'hu' => 'Előző hónap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'from'
			],
            ['text' => ['en' => 'Date From', 'hu' => 'Dátum-tól']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'to'
			],
            ['text' => ['en' => 'Date To', 'hu' => 'Dátum-ig']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'workday'
			],
            ['text' => ['en' => 'Workday', 'hu' => 'Munkanap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'non_working_day'
			],
            ['text' => ['en' => 'Non working day', 'hu' => 'Munkaszüneti nap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'now'
			],
            ['text' => ['en' => 'Now', 'hu' => 'Most']],
		);
    }

    protected function addEntityEventTranslations() {
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'created'
			],
            ['text' => ['en' => 'Entity created', 'hu' => 'Elem létrehozva']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'deleted'
			],
            ['text' => ['en' => 'Entity deleted', 'hu' => 'Elem törölve']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'updated'
			],
            ['text' => ['en' => 'Entity updated', 'hu' => 'Elem módosítva']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'exists'
			],
            ['text' => ['en' => 'Entity already exists', 'hu' => 'Elem már létezik']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'uploaded'
			],
            ['text' => ['en' => 'Entity uploaded', 'hu' => 'Elem feltöltve']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'created_by'
			],
            ['text' => ['en' => 'Created by', 'hu' => 'Létrehozta']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'updated_by'
			],
            ['text' => ['en' => 'Updated by', 'hu' => 'Módosította']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'deleted_by'
			],
            ['text' => ['en' => 'Deleted by', 'hu' => 'Törölte']],
		);
    }

    protected function addStateTranslations() {
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'state'
			],
            ['text' => ['en' => 'state', 'hu' => 'Státusz']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'pending'
			],
            ['text' => ['en' => 'Pending', 'hu' => 'Elfogadásra vár']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'permitted'
			],
            ['text' => ['en' => 'Permitted', 'hu' => 'Engedélyezve']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'active'
			],
            ['text' => ['en' => 'Active', 'hu' => 'Aktív']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'inactive'
			],
            ['text' => ['en' => 'Inactive', 'hu' => 'Inaktív']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'disabled'
			],
            ['text' => ['en' => 'Disabled', 'hu' => 'Kikapcsolva']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'enabled'
			],
            ['text' => ['en' => 'Enabled', 'hu' => 'Bekapcsolva']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'not_found'
			],
            ['text' => ['en' => 'Not Found', 'hu' => 'Nem Található']],
		);
    }

    protected function actionTranslations() {
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'actions'
			],
            ['text' => ['en' => 'Actions', 'hu' => 'Kezelés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'search'
			],
            ['text' => ['en' => 'Search', 'hu' => 'Keresés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'print'
			],
            ['text' => ['en' => 'Print', 'hu' => 'Nyomtatás']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'check_all'
			],
            ['text' => ['en' => 'Check All', 'hu' => 'Összes Kijelölése']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'reset_filter'
			],
            ['text' => ['en' => 'Reset Filter', 'hu' => 'Szűrők Törlése']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'show_more'
			],
            ['text' => ['en' => 'Show More', 'hu' => 'Mutass Többet']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'confirm_delete'
			],
            ['text' => ['en' => 'Confirm delete', 'hu' => 'Törlés megerősítése']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'save'
			],
            ['text' => ['en' => 'Save', 'hu' => 'Mentés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'cancel'
			],
            ['text' => ['en' => 'Cancel', 'hu' => 'Mégse']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'back'
			],
            ['text' => ['en' => 'Back', 'hu' => 'Vissza']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'next'
			],
            ['text' => ['en' => 'Next', 'hu' => 'Következő']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'previous'
			],
            ['text' => ['en' => 'Previous', 'hu' => 'Előző']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'add_new'
			],
            ['text' => ['en' => 'Add new', 'hu' => 'Új érték hozzáadása']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'create'
			],
            ['text' => ['en' => 'Creeate new', 'hu' => 'Új létrehozása']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'delete'
			],
            ['text' => ['en' => 'Delete', 'hu' => 'Törlés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'edit'
			],
            ['text' => ['en' => 'Edit', 'hu' => 'Szerkesztés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'view'
			],
            ['text' => ['en' => 'View', 'hu' => 'Megtekintés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'list'
			],
            ['text' => ['en' => 'List', 'hu' => 'Listázás']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'logout'
			],
            ['text' => ['en' => 'Logout', 'hu' => 'Kijelentkezés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'login'
			],
            ['text' => ['en' => 'Login', 'hu' => 'Bejelentkezés']],
        );
        Translation::updateOrCreate([
				'group' => 'action',
				'key' => 'register'
			],
			['text' => ['en' => 'Register', 'hu' => 'Regisztráció']],
		);
        Translation::updateOrCreate([
				'group' => 'action',
				'key' => 'add_attribute'
			],
			['text' => ['en' => 'Add Attribute', 'hu' => 'Új Tulajdonság']],
		);
		
        Translation::updateOrCreate([
				'group' => 'action',
				'key' => 'save_attributes'
			],
			['text' => ['en' => 'Save Attributes', 'hu' => 'Tulajdonságok Mentése']],
		);
    }

    protected function errorTranslations() {
        Translation::updateOrCreate([
	            'group' => 'error',
	            'key' => 'error'
			],
            ['text' => ['en' => 'Error', 'hu' => 'Hiba']],
		);
        Translation::updateOrCreate([
	            'group' => 'error',
	            'key' => 'module_disabled'
			],
            ['text' => ['en' => 'Module is disabled!', 'hu' => 'Modul nincs aktiválva!']],
		);
        Translation::updateOrCreate([
	            'group' => 'error',
	            'key' => 'unauthorized'
			],
            ['text' => ['en' => 'Unauthorized action!', 'hu' => 'Jogosulatlan művelet!']],
		);
    }
}
