<?php

namespace Minsal\MaestrosBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlPaisAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombre')
            ->add('dominio2')
            ->add('dominio3')
            ->add('isonumero')
            ->add('fechaHoraReg')
            ->add('fechaHoraMod')
            ->add('activo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('nombre')
            ->add('dominio2')
            ->add('dominio3')
            ->add('isonumero')
            ->add('fechaHoraReg')
            ->add('fechaHoraMod')
            ->add('activo')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre', 'text', array(
                    'label' => 'Escriba el nombre del pais',
                    'max_length' => 150,
                    'required' => true
                ))
                ->add('isonumero', null, array(
                    'label' => 'Escriba el ISO 3166-1',
                    'required' => true
                ))
                ->add('dominio2', 'text', array(
                    'label' => 'Abreviatura según ISO 3166-1 alfa-2',
                    'max_length' => 2,
                    'required' => false
                ))
                ->add('dominio3', 'text', array(
                    'label' => 'Abreviatura de dominio3 según ISO 3166-1 alfa-3',
                    'max_length' => 3,
                    'required' => false
                ))
                ->add('activo', null, array(
                    'required' => false
                ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombre')
            ->add('dominio2')
            ->add('dominio3')
            ->add('isonumero')
            ->add('fechaHoraReg')
            ->add('fechaHoraMod')
            ->add('activo')
        ;
    }
}
