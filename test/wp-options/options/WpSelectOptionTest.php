<?php
/*
 * This file is part of wp-options.
 *
 * (c) 2009-2010 Juan Carlos Clemente
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 *  unit test case.
 */
class WpSelectOptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * Probando que el option guarde/recupere la informacion de forma correcta
     */
    public function testSave()
    {
        $fontSize = array(
            '10px' => '10px',
            '11px' => '11px',
            '12px' => '12px',
            '13px' => '13px',
            '14px' => '14px',
            '15px' => '15px'
        );
        $obj = new WpOptions(WP_VERSION, new wpdb());
        
        $obj->addSelectOption('select',$fontSize,'13px','Multiple Select','Select one or more font sizes');
        $this->assertEquals('13px', $obj->getOption('select'));
        
        $obj->setOptionValue('select','15px');
        $this->assertEquals('15px', $obj->getOption('select'));
    }
}
