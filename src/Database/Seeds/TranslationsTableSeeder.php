<?php

namespace MayIFit\Core\Translation\Database\Seeds;

use Illuminate\Database\Seeder;
use MayIFit\Core\Translation\Models\Translation;

/**
 * Class TranslationsTableSeeder
 *
 * @package MayIFit\Core\Translation
 */
class TranslationsTableSeeder extends Seeder
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
        $this->filterTranslations();
    }

    protected function addGeneralTranslations() {
		Translation::updateOrCreate([
				'group' => 'list',
				'key' => 'translation'
			],
			['text' => ['en' => 'translation list', 'hu' => 'fordítás lista']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'name'
			],
            ['text' => ['en' => 'name', 'hu' => 'név']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'type'
			],
            ['text' => ['en' => 'type', 'hu' => 'típus']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'translations'
			],
            ['text' => ['en' => 'translations', 'hu' => 'fordítások']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'users'
			],
            ['text' => ['en' => 'users', 'hu' => 'felhasználók']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'description'
			],
            ['text' => ['en' => 'description', 'hu' => 'leírás']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'information'
			],
            ['text' => ['en' => 'information', 'hu' => 'információ']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'email'
			],
            ['text' => ['en' => 'email', 'hu' => 'e-mail']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'password'
			],
            ['text' => ['en' => 'password', 'hu' => 'jelszó']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'key'
			],
            ['text' => ['en' => 'key', 'hu' => 'kulcs']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'group'
			],
            ['text' => ['en' => 'group', 'hu' => 'csoport']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'language'
			],
            ['text' => ['en' => 'language', 'hu' => 'nyelv']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'value'
			],
            ['text' => ['en' => 'value', 'hu' => 'érték']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'filters'
			],
            ['text' => ['en' => 'filters', 'hu' => 'szűrők']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'system'
			],
            ['text' => ['en' => 'system', 'hu' => 'rendszer']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'settings'
			],
            ['text' => ['en' => 'settings', 'hu' => 'beállítások']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'breadcrumbs'
			],
            ['text' => ['en' => 'breadcrumbs', 'hu' => 'morzsák']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'list_view'
			],
            ['text' => ['en' => 'list view', 'hu' => 'lista nézet']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'board_view'
			],
            ['text' => ['en' => 'board view', 'hu' => 'tábla nézet']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'system_settings'
			],
            ['text' => ['en' => 'system settings', 'hu' => 'rendszer beállítások']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'entity'
			],
            ['text' => ['en' => 'entity', 'hu' => 'elem']],
		);
        Translation::updateOrCreate([
	            'group' => 'global',
	            'key' => 'home'
			],
            ['text' => ['en' => 'home', 'hu' => 'nyitólap']],
        );
        Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'forgot_password'
			],
			['text' => ['en' => 'forgot password', 'hu' => 'elfelejtett jelszó']],
    	);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'small_letters_without_accents_and_underscores_only'
			],
			['text' => ['en' => 'small letter without accents and underscores for whitespaces', 'hu' => 'kis betűk ékezet nélkül, szóköz helyett aláhúzásokkal']],
		);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'images'
			],
			['text' => ['en' => 'images', 'hu' => 'képek']],
		);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'files'
			],
			['text' => ['en' => 'files', 'hu' => 'fájlok']],
		);
		Translation::updateOrCreate([
				'group' => 'global',
				'key' => 'documents'
			],
			['text' => ['en' => 'documents', 'hu' => 'dokumentumok']],
		);
    }

    protected function addUserAttributeTranslations() {
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'user'
			],
            ['text' => ['en' => 'user', 'hu' => 'felhasználó']],
		);
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'profile'
			],
            ['text' => ['en' => 'user profile', 'hu' => 'felhasználói profil']],
		);
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'real_name'
			],
            ['text' => ['en' => 'real name', 'hu' => 'teljes, valós név']],
		);
        Translation::updateOrCreate([
	            'group' => 'user',
	            'key' => 'name'
			],
            ['text' => ['en' => 'user name', 'hu' => 'felhasználónév']],
		);
    }

    protected function addDateRelatedTranslations() {
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'date'
			],
            ['text' => ['en' => 'date', 'hu' => 'dátum']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'created_at'
			],
            ['text' => ['en' => 'created at', 'hu' => 'létrehozva']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'updated_at'
			],
            ['text' => ['en' => 'updated at', 'hu' => 'módosítva']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'deleted_at'
			],
            ['text' => ['en' => 'deleted at', 'hu' => 'törölve']],
		);            
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'permitted_at'
			],
            ['text' => ['en' => 'permitted at', 'hu' => 'jóváhagyva']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'this_month'
			],
            ['text' => ['en' => 'this month', 'hu' => 'ez a hónap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'prev_month'
			],
            ['text' => ['en' => 'previous month', 'hu' => 'előző hónap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'from'
			],
            ['text' => ['en' => 'date from', 'hu' => 'dátum-tól']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'to'
			],
            ['text' => ['en' => 'date to', 'hu' => 'dátum-ig']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'workday'
			],
            ['text' => ['en' => 'workday', 'hu' => 'munkanap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'non_working_day'
			],
            ['text' => ['en' => 'non working day', 'hu' => 'munkaszüneti nap']],
		);
        Translation::updateOrCreate([
	            'group' => 'date',
	            'key' => 'now'
			],
            ['text' => ['en' => 'now', 'hu' => 'most']],
		);
    }

    protected function addEntityEventTranslations() {
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'created'
			],
            ['text' => ['en' => 'entity created', 'hu' => 'elem létrehozva']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'deleted'
			],
            ['text' => ['en' => 'entity deleted', 'hu' => 'elem törölve']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'updated'
			],
            ['text' => ['en' => 'entity updated', 'hu' => 'elem módosítva']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'exists'
			],
            ['text' => ['en' => 'entity already exists', 'hu' => 'elem már létezik']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'uploaded'
			],
            ['text' => ['en' => 'entity uploaded', 'hu' => 'elem feltöltve']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'created_by'
			],
            ['text' => ['en' => 'created by', 'hu' => 'létrehozta']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'updated_by'
			],
            ['text' => ['en' => 'updated by', 'hu' => 'módosította']],
		);
        Translation::updateOrCreate([
	            'group' => 'entity',
	            'key' => 'deleted_by'
			],
            ['text' => ['en' => 'deleted by', 'hu' => 'törölte']],
		);
    }

    protected function addStateTranslations() {
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'state'
			],
            ['text' => ['en' => 'state', 'hu' => 'státusz']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'pending'
			],
            ['text' => ['en' => 'pending', 'hu' => 'elfogadásra vár']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'permitted'
			],
            ['text' => ['en' => 'permitted', 'hu' => 'engedélyezve']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'active'
			],
            ['text' => ['en' => 'active', 'hu' => 'aktív']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'inactive'
			],
            ['text' => ['en' => 'inactive', 'hu' => 'inaktív']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'disabled'
			],
            ['text' => ['en' => 'disabled', 'hu' => 'kikapcsolva']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'enabled'
			],
            ['text' => ['en' => 'enabled', 'hu' => 'bekapcsolva']],
		);
        Translation::updateOrCreate([
	            'group' => 'state',
	            'key' => 'not_found'
			],
            ['text' => ['en' => 'not found', 'hu' => 'nem található']],
		);
    }

    protected function actionTranslations() {
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'actions'
			],
            ['text' => ['en' => 'actions', 'hu' => 'kezelés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'search'
			],
            ['text' => ['en' => 'search', 'hu' => 'keresés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'print'
			],
            ['text' => ['en' => 'print', 'hu' => 'nyomtatás']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'check_all'
			],
            ['text' => ['en' => 'check all', 'hu' => 'összes kijelölése']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'reset_filter'
			],
            ['text' => ['en' => 'reset filter', 'hu' => 'szűrők törlése']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'show_more'
			],
            ['text' => ['en' => 'show more', 'hu' => 'mutass többet']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'confirm_delete'
			],
            ['text' => ['en' => 'confirm delete', 'hu' => 'törlés megerősítése']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'save'
			],
            ['text' => ['en' => 'save', 'hu' => 'mentés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'cancel'
			],
            ['text' => ['en' => 'cancel', 'hu' => 'mégse']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'back'
			],
            ['text' => ['en' => 'back', 'hu' => 'vissza']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'next'
			],
            ['text' => ['en' => 'next', 'hu' => 'következő']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'previous'
			],
            ['text' => ['en' => 'previous', 'hu' => 'előző']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'add_new'
			],
            ['text' => ['en' => 'add new', 'hu' => 'új érték hozzáadása']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'create'
			],
            ['text' => ['en' => 'creeate new', 'hu' => 'új létrehozása']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'delete'
			],
            ['text' => ['en' => 'delete', 'hu' => 'törlés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'edit'
			],
            ['text' => ['en' => 'edit', 'hu' => 'szerkesztés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'view'
			],
            ['text' => ['en' => 'view', 'hu' => 'megtekintés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'list'
			],
            ['text' => ['en' => 'list', 'hu' => 'listázás']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'logout'
			],
            ['text' => ['en' => 'logout', 'hu' => 'kijelentkezés']],
		);
        Translation::updateOrCreate([
	            'group' => 'action',
	            'key' => 'login'
			],
            ['text' => ['en' => 'login', 'hu' => 'bejelentkezés']],
        );
        Translation::updateOrCreate([
				'group' => 'action',
				'key' => 'register'
			],
			['text' => ['en' => 'register', 'hu' => 'regisztráció']],
		);
        Translation::updateOrCreate([
				'group' => 'action',
				'key' => 'add_attribute'
			],
			['text' => ['en' => 'add attribute', 'hu' => 'új tulajdonság']],
		);
		
        Translation::updateOrCreate([
				'group' => 'action',
				'key' => 'save_attributes'
			],
			['text' => ['en' => 'save attributes', 'hu' => 'tulajdonságok mentése']],
		);
    }

    protected function errorTranslations() {
        Translation::updateOrCreate([
	            'group' => 'error',
	            'key' => 'error'
			],
            ['text' => ['en' => 'error', 'hu' => 'hiba']],
		);
        Translation::updateOrCreate([
	            'group' => 'error',
	            'key' => 'module_disabled'
			],
            ['text' => ['en' => 'module is disabled!', 'hu' => 'modul nincs aktiválva!']],
		);
        Translation::updateOrCreate([
	            'group' => 'error',
	            'key' => 'unauthorized'
			],
            ['text' => ['en' => 'unauthorized action!', 'hu' => 'jogosulatlan művelet!']],
		);
	}
	
	protected function filterTranslations() {
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'lt'
			],
			['text' => ['en' => 'lesser than', 'hu' => 'kisebb mint']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'gt'
			],
			['text' => ['en' => 'greater than', 'hu' => 'nagyobb mint']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'gte'
			],
			['text' => ['en' => 'greater than or equal', 'hu' => 'nagyobb mint vagy egyenlő']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'lte'
			],
			['text' => ['en' => 'lesser than or equal', 'hu' => 'kisebb mint vagy egyenlő']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'eq'
			],
			['text' => ['en' => 'equal', 'hu' => 'egyenlő']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'neq'
			],
			['text' => ['en' => 'not equal', 'hu' => 'nem egyenlő']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'like'
			],
			['text' => ['en' => 'like', 'hu' => 'hasonló']],
		);
		Translation::updateOrCreate([
				'group' => 'filter',
				'key' => 'between'
			],
			['text' => ['en' => 'between', 'hu' => 'között']],
		);
	}
}
