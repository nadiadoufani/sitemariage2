<?php

namespace App\Controller\Admin;

use App\Entity\Publicite3;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class Publicite3CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Publicite3::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
          
            IntegerField::new('prix'),
            ImageField::new('image')
            ->setBasePath('imgpublicite3/')
            ->setUploadDir('public/imgpublicite3')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
  
}
