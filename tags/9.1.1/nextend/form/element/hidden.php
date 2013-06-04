<?php

class NextendElementHidden extends NextendElement {
    
    var $_mode = 'hidden';
    
    var $_tooltip = false;
    
    function fetchTooltip() {
        if($this->_tooltip){
            return parent::fetchTooltip();
        }else{
            return $this->fetchNoTooltip();
        }
    }
    
    function fetchElement() {

        return "<input id='" . $this->_id . "' name='" . $this->_inputname . "' value='" . $this->_form->get($this->_name, $this->_default) . "' type='".$this->_mode."' autocomplete='off' />";
    }
}