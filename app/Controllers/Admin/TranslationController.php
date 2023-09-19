<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LanguageModel;
use App\Models\TranslationModel;
use App\Models\UserModel;

/**
 * TranslationController class
 */
final class TranslationController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getListLanguages function
     *
     * @return string
     */
    public function getListLanguages(): string
    {
        $data['sqids'] = $this->sqids;

        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $translationModel = new TranslationModel();
        $translations = $translationModel
            ->select('
                translations.id,
                languages.name,
                translations.tags,
                translations.description
            ')
            ->join('languages', 'translations.language = languages.iso')
            ->where('user_id', session('id'))
            ->findAll();
        $data['translations'] = $translations;

        // Renders the '/app/Views/pages/admin/translations/list-languages' template.
        return $this->render('pages.admin.translations.list-languages', $data);
    }

    /**
     * getAddLanguage function
     *
     * @return string
     */
    public function getAddLanguage(): string
    {
        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $languageModel = new LanguageModel();
        $languages = $languageModel->findAll();
        $data['languages'] = $languages;

        // Renders the '/app/Views/pages/admin/translations/add-language' template.
        return $this->render('pages.admin.translations.add-language', $data);
    }

    /**
     * getEditLanguage function
     *
     * @param string $hash
     *
     * @return string
     */
    public function getEditLanguage(string $hash): string
    {
        helper('form');

        $id = $this->sqids->decode($hash);

        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $languageModel = new LanguageModel();
        $languages = $languageModel->findAll();
        $data['languages'] = $languages;

        $translationModel = new TranslationModel();
        $translation = $translationModel->where('id', $id)->first();
        $data['translation'] = $translation;

        // Renders the '/app/Views/pages/admin/translations/edit-language' template.
        return $this->render('pages.admin.translations.edit-language', $data);
    }
}
