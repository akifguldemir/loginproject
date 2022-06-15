<?php

namespace App\Controller\Admin;

use App\Entity\BlogTranslation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlogTranslationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BlogTranslation::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
