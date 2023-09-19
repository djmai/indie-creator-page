<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LanguageModel;
use App\Models\ProjectModel;
use App\Models\UserModel;

/**
 * ProjectController class
 */
final class ProjectController extends BaseController
{

    // -----------------------------------------------------------------
    // Methods
    // -----------------------------------------------------------------

    /**
     * getListProjects function
     *
     * @return string
     */
    public function getListProjects(): string
    {
        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $projectModel = new ProjectModel();
        $projects = $projectModel->where('user_id', session('id'))->findAll();
        $data['projects'] = $projects;

        // Renders the '/app/Views/pages/admin/projects/list-projects' template.
        return $this->render('pages.admin.projects.list-projects', $data);
    }

    /**
     * getAddProject function
     *
     * @return string
     */
    public function getAddProject(): string
    {
        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $languageModel = new LanguageModel();
        $languages = $languageModel->findAll();
        $data['languages'] = $languages;

        // Renders the '/app/Views/pages/admin/projects/add-project' template.
        return $this->render('pages.admin.projects.add-project', $data);
    }

    /**
     * getEditProject function
     *
     * @param string $hash
     *
     * @return string
     */
    public function getEditProject(string $hash): string
    {
        helper('form');

        $data['currentLanguage'] = $this->request->getLocale();

        $userModel = new UserModel();
        $user = $userModel->where('uuid', session('id'))->first();
        $data['user'] = $user;

        $languageModel = new LanguageModel();
        $languages = $languageModel->findAll();
        $data['languages'] = $languages;

        $projectModel = new ProjectModel();
        $translation = $projectModel->where('uuid', $hash)->first();
        $data['translation'] = $translation;

        // Renders the '/app/Views/pages/admin/projects/edit-language' template.
        return $this->render('pages.admin.projects.edit-language', $data);
    }
}
