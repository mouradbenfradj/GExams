<?php
namespace App\Controller\Admin;

use App\Entity\Cours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }/* 

    public function configureFields(string $pageName): iterable
    {
        return [
            'matiere',
            'dateDebut',
            'dateFin',
            'classe',
            'enseignant',
        ];
    } */
}
