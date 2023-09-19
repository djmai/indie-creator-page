<?php

namespace App\Validation;

use App\Models\UserModel;

/**
 * UserRules class
 */
class UserRules
{

    /**
     * validate_user function
     *
     * @param string $string
     * @param string $fields
     * @param array $data
     * @return void
     */
    public function validate_user(string $string, string $fields, array $data)
    {
        $userModel = new UserModel();

        if (!$user = $userModel->where('email', $data['email'])->first()) {
            return false;
        }

        return password_verify($data['password'], $user->password);
    }
}
