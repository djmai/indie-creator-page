<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

/**
 * AccountController class
 */
final class AccountController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getAccount function
     *
     * @return string
     */
    public function getAccount(): string
    {
        helper('form');

        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        // Renders the '/app/Views/pages/admin/account' template.
        return $this->render('pages.admin.account', $data);
    }
}
