<?php
/**
*   Lower Case Customer Emails
*
*   Do not copy, modify or distribute this document in any form.
*
*   @author     Matthijs <matthijs@blauwfruit.nl>
*   @copyright  Copyright (c) 2013-2024 blauwfruit (https://blauwfruit.nl)
*   @license    Proprietary Software
*
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Lowercasecustomeremails extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'lowercasecustomeremails';
        $this->tab = 'checkout';
        $this->version = '1.0.0';
        $this->author = 'blauwfruit';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Lower Case Customer Emails');
        $this->description = $this->l('Make sure customer emails are always lower case!');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('actionObjectCustomerAddBefore') &&
            $this->registerHook('actionObjectCustomerUpdateBefore');
    }

    public function hookActionObjectCustomerAddBefore($params)
    {
        $params['object']->email = strtolower($params['object']->email);
    }

    public function hookActionObjectCustomerUpdateBefore($params)
    {
        $params['object']->email = strtolower($params['object']->email);
    }
}
