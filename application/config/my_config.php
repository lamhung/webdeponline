<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *--------------------------------------------------------------------------
 *  My config
 *--------------------------------------------------------------------------
 *
 * Group List
 * Permission of Group
 *
 */

$config = array(
    'groups' => array('admin','member'),
    'permission' => array(
        'list' => array(
            'user' => 'index|add|edit|show|delete',
            'category_list' => 'index|add|edit|show|delete',
            'category_cat' => 'index|add|edit|show|delete',
            'product' => 'index|add|edit|show|delete',
            // 'article' => 'index|add|edit|show|delete',
            'post' => 'index|add|edit|show|delete',
            'single_post' => 'index|add|edit|show|delete',
            'config' => 'index|add|edit|show|delete',
            'contact' => 'index|add|edit|show|delete',
        ),
        'admin' => array(
            'user' => 'index|add|edit|show|delete',
            'category_list' => 'index|add|edit|show|delete',
            'category_cat' => 'index|add|edit|show|delete',
            'product' => 'index|add|edit|show|delete',
            // 'article' => 'index|add|edit|show|delete',
            'post' => 'index|add|edit|show|delete',
            'single_post' => 'index|add|edit|show|delete',
            'config' => 'index|add|edit|show|delete',
            'contact' => 'index|add|edit|show|delete',
        ),
        'member' => array(
            'user' => 'index|show',
            'category_list' => 'index|add|edit|show|delete',
            'category_cat' => 'index|add|edit|show|delete',
            'product' => 'index|add|edit|show|delete',
            'post' => 'index|add|edit|show|delete',
            'single_post' => 'index|add|edit|show|delete',
            'config' => 'index|add|edit|show|delete',
            'contact' => 'index|add|edit|show|delete',
        )
    )
);
