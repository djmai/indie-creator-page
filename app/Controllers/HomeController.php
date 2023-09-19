<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\SkillModel;
use App\Models\TranslationModel;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * HomeController class
 */
final class HomeController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getIndex function
     *
     * @return string
     */
    public function getIndex(): string
    {
        return $this->render('pages.public.index');
    }

    /**
     * getUser function
     *
     * @param string $username
     *
     * @return string
     */
    public function getUser(string $username): string
    {
        $currentLanguage = $this->request->getLocale();
        $data['currentLanguage'] = $currentLanguage;

        $userModel = new UserModel();

        if (!$user = $userModel->where('username', $username)->first()) {
            throw PageNotFoundException::forPageNotFound();
        }

        if (!session('is_logged') && 'private' === $user->status) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data['user'] = $user;

        $translationModel = new TranslationModel();
        $translation = $translationModel->where(['language' => $currentLanguage, 'user_id' => $user->uuid])->first();
        $data['translation'] = $translation;

        $projectModel = new ProjectModel();
        $sideProjects = $projectModel->where('user_id', $user->uuid)->findAll();
        $data['sideProjects'] = $sideProjects;

        $skillModel = new SkillModel();
        $skills = $skillModel->where('user_id', $user->uuid)->findAll();
        $data['skills'] = $skills;

        return $this->render('pages.public.user', $data);
    }

    /**
     * getProject function
     *
     * @param string $username
     * @param string $project
     *
     * @return string
     */
    public function getProject(string $username, string $slug): string
    {
        $userModel = new UserModel();

        if (!$user = $userModel->where('username', $username)->first()) {
            throw PageNotFoundException::forPageNotFound();
        }

        if (!session('is_logged') && 'private' === $user->status) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data['user'] = $user;

        $projectModel = new ProjectModel();

        if (!$project = $projectModel->where('projects.slug', $slug)->first()) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data['project'] = $project;

        return $this->render('pages.public.project', $data);
    }
}
