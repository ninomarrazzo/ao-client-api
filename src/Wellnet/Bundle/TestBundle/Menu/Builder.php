<?php

namespace Wellnet\Bundle\TestBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

  /**
   *
   */
  public function mainMenu(FactoryInterface $factory, array $options) {
    $menu = $factory->createItem('root');

    $menu->addChild('2-legged', array('route' => 'wellnet_test_2legged'));
    $menu->addChild('3-legged', array('route' => 'wellnet_test_3legged'));
    $menu->addChild('collaudo', array('route' => 'wellnet_test_collaudo'));
    $menu->addChild('help Ita', array('route' => 'wellnet_test_help_ita'));
    $menu->addChild('help Eng', array('route' => 'wellnet_test_help_eng'));

    return $menu;
  }

}
