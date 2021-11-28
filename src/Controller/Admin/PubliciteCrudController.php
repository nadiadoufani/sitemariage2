<?php

namespace App\Controller\Admin;

use App\Entity\Publicite;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PubliciteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Publicite::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
          
            IntegerField::new('prix'),
            ImageField::new('image')
            ->setBasePath('imgpublicite/')
            ->setUploadDir('public/imgpublicite')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
         
        ];
    }
    
}
