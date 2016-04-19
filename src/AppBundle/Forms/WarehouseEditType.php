<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 19/04/16
 * Time: 13:36
 */
// src/AppBundle/Forms/WarehouseEditType.php

namespace AppBundle\Forms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class WarehouseEditType extends AbstractType
{
    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('id', TextType::class)
            ->add('save', SubmitType::class, array('label'=> 'Edit Warehouse'));
    }

}