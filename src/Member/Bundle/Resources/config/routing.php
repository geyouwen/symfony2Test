<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('member', new Route('/member', array(
    '_controller' => 'MemberBundle:Default:index',
)));

$collection->add('member_login', new Route('/member/login', array(
    '_controller' => 'MemberBundle:Default:login',
)));

$collection->add('member_logout', new Route('/member/logout', array(
    '_controller' => 'MemberBundle:Default:logout',
)));

$collection->add('member_admin', new Route('/member/admin', array(
    '_controller' => 'MemberBundle:Default:admin',
)));

$collection->add('member_add', new Route('/member/add', array(
    '_controller' => 'MemberBundle:Default:add',
)));

$collection->add('member_list', new Route('/member/list', array(
    '_controller' => 'MemberBundle:Default:list',
)));

$collection->add('member_edit', new Route('/member/edit/{id}', array(
    '_controller' => 'MemberBundle:Default:edit',
)));

return $collection;
