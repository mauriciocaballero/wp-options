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

class WpSelectUsersOption extends WpOption
{
    /**
     * Constructor de la clase
     *
     * @param string $name
     * @param int|mixed $defaultValue
     * @return WpSelectUsersOption
     */
    public function WpSelectUsersOption($name, $defaultValue)
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
        $this->options = get_users_of_blog();
        $value = $this->getValue();
        if($this->isMultiple)
            $input = "<select id='{$this->getFormId()}' name='{$this->getFormName()}[]' multiple='multiple' size='5' value='{$value}' >";
        else
            $input = "<select id='{$this->getFormId()}' name='{$this->getFormName()}' value='{$value}' >";
        
        if(! $this->isMultiple)
        {
            $input .= "<option value='0'>" . _s('Select one user') . "</option>";
            foreach($this->options as $user)
                $input .= "\n<option value='{$user->user_id}' " . ($user->user_id == $value ? 'selected="selected"' : '') . " >" . _s($user->display_name) . '</option>';
        } else
            foreach($this->options as $user)
                $input .= "\n<option value='{$user->user_id}' " . (in_array($user->user_id, $value) ? 'selected="selected"' : '') . " >" . _s($user->display_name) . '</option>';
        
        $input .= "</select>";
        return $input;
    }

    /**
     * Get the value
     */
    public function getValue()
    {
        $val = parent::getValue();
        $val = ($val) ? $val : (
            ($this->isMultiple) ? array() : 0
        );
        return $val;
    }
}


