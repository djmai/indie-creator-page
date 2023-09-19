<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

/**
 * LinkController class
 */
final class LinkController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getLinks function
     *
     * @return string
     */
    public function getLinks(): string
    {
        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        // Renders the '/app/Views/pages/admin/links' template.
        return $this->render('pages.admin.links', $data);
    }
}
