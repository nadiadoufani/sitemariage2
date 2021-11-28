<?php

namespace App\Controller\Admin;

use App\Entity\Publicite1;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class Publicite1CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Publicite1::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
          
            IntegerField::new('prix'),
            ImageField::new('image')
            ->setBasePath('imgpublicite1/')
            ->setUploadDir('public/imgpublicite1')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
         
        ];
    }
    
}
