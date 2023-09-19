<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LanguageModel;
use App\Models\TranslationModel;
use App\Models\UserModel;

/**
 * ProfileController class
 */
final class ProfileController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getProfile function
     *
     * @return string
     */
    public function getProfile(): string
    {
        helper('form');

        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $languageModel = new LanguageModel();
        $languages = $languageModel->findAll();
        $data['languages'] = $languages;

        $translationModel = new TranslationModel();
        $translation = $translationModel->where(['language' => 'en', 'user_id' => session('id')])->first();
        $data['translation'] = $translation;

        // Renders the '/app/Views/pages/admin/profile' template.
        return $this->render('pages.admin.profile', $data);
    }
}
