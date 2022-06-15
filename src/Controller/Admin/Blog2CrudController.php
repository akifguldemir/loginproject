<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use App\Admin\Field\TranslationField;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class Blog2CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Blog::class;
    }

    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            //->renderContentMaximized()
            //->renderSidebarMinimized()
            // the Symfony Security permission needed to manage the entity
            // (none by default, so you can manage all instances of the entity)
            ->setEntityPermission('ROLE_ADMIN')
            ->setFormThemes(
                [
                    '@A2lixTranslationForm/bootstrap_5_layout.html.twig',
                    //'admin/a2lix_bootstrap_5_layout.html.twig',
                    '@EasyAdmin/crud/form_theme.html.twig',
                ]
            );

    }

    public function configureFields(string $pageName): iterable
    {
        $fieldsConfig = [
            'title' => [
                'field_type' => TextType::class,
                'required' => true,
                'label' => 'title',
            ],
            'description' => [
                'field_type' => TextType::class,
                'required' => true,
                'label' => 'description',
            ],
        ];

        return [
            TextField::new('title'),
            TranslationField::new('translations', 'Translate', $fieldsConfig)
                ->setRequired(true)
                ->hideOnIndex(),
        ];
    }
    
}
