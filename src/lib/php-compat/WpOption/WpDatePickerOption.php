<?php
/**
 * Spiga
 *
 * wp-options
 *
 * @category   Wordpress
 * @package    Storelicious_Themes
 * @copyright  Copyright (c) 2008-2010 Spiga (http://www.spiga.mx)
 * @author     zetta (http://www.ctrl-zetta.com)
 * @version    1.1
 */

class WpDatePickerOption extends WpOption
{
    /**
     * Constructor de la clase
     *
     * @param string $name
     * @param string $defaultValue
     * @return WpStringOption
     */
    function WpDatePickerOption($name, $defaultValue)
    {
        parent::__construct($name, $defaultValue);
    }
    
    /**
     * Genera el html de la opci�n
     * @return string
     * @access public
     */
    function ___toString()
    {
        $value = $this->getValue();
        $formName = $this->getFormName();
        $idName = $this->getFormId();
        return "<input id='{$idName}' class='wpDatePickerOption' type='text' size='45' name='{$formName}' value='{$value}' />";
    }
}