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

class WpBooleanOption extends WpOption
{
    protected $emptyValue = 'false';
    
    /**
     * Constructor de la clase
     *
     * @param string $name
     * @param string $defaultValue
     */
    public function WpBooleanOption($name, $defaultValue)
    {
        parent::__construct($name, $defaultValue);
    }
    
    /**
     * Genera el html de la opción
     * @return string
     * @access public
     */
    public function ___toString()
    {
        $value = $this->getValue();
        $input = "\n<label for='{$this->getFormId()}_true'><input type='radio' id='{$this->getFormId()}_true' name='{$this->getFormName()}' value='true' " . ($this->cast($value) ? 'checked="checked"' : '') . " /> " . _s('Yes') . "</label>&nbsp;";
        $input .= "\n<label for='{$this->getFormId()}_false'><input type='radio' id='{$this->getFormId()}_false' name='{$this->getFormName()}' value='false' " . (! $this->cast($value) ? 'checked="checked"' : '') . " /> " . _s('No'). '</label>';
        return $input;
    }
    
    /**
     * cast the value to a boolean
     * @param string|int|boolean $value
     * @return boolean
     * @access public
     */
    protected function cast($value)
    {
        if(is_bool($value))
            return $value;
        if($value === 'false' || $value === 0 || $value === '0' || $value === 'null' || $value === NULL || $value === false)
            return false;
        else
            return true;
    }
}
