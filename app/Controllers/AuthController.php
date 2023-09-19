<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Response;
use Config\Services;

/**
 * AuthController class
 */
final class AuthController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getLogin function
     *
     * This method loads the 'login' route. <br/>
     * <b>post: </b>access to GET method.
     *
     * @return string
     */
    public function getLogin(): string
    {
        $data['currentLanguage'] = $this->request->getLocale();

        // Renders the '/app/Views/pages/public/login' template.
        return $this->render('pages.public.login', $data);
    }

    /**
     * postLogin function
     *
     * This method loads the 'login' route. <br/>
     * <b>post: </b>access to POST method.
     *
     * @return Response
     */
    public function postLogin(): Response
    {
        $validation = Services::validation();

        // Sets rules for email and password.
        $validation->setRules([
            'email' => 'required|valid_email|max_length[320]',
            'password' => 'required|alpha_numeric_punct|min_length[6]|max_length[25]|validate_user[email,password]',
        ]);

        // Validates email and password.
        if (!$validation->withRequest($this->request)->run()) {
            // Redirects to back.
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $userModel = new UserModel();

        // Gets user by 'email'.
        $user = $userModel->where('email', $this->request->getPost('email'))->first();

        // Sets session values.
        $data = [
            'id' => $user->uuid,
            'email' => $user->email,
            'is_logged' => true
        ];

        $session = session();

        // Sets the session.
        $session->set($data);

        // Redirects to 'profile' route.
        return redirect()->route('profile');
    }

    /**
     * getLogout function
     *
     * This method loads the 'logout' route. <br/>
     * <b>post: </b>access to GET method.
     *
     * @return Response
     */
    public function getLogout(): Response
    {
        $session = session();

        // The Session is destroyed.
        $session->destroy();

        // Redirects to 'login' route.
        return redirect()->route('login');
    }
}
