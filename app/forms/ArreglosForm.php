<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;

class ArreglosForm extends Form {

    /**
     * Initialize the companies form
     */
    public function initialize($entity = null, $options = array()) {

        if (!isset($options['edit'])) {
            $element = new Text("id");
            $this->add($element->setLabel("Id"));
        } else {
            $this->add(new Hidden("id"));
        }
        $function_name = new Text("Function Name");
        $function_name->setLabel("Function_name");
        $function_name->setFilters(array('striptags', 'string'));
        $function_name->addValidators(array(
            new PresenceOf(array(
                'message' => 'Function Name is required'
                    ))
        ));
        $this->add($function_name);

        $function_description = new Text("function Description");
        $function_description->setLabel("Function_Description");
        $function_description->setFilters(array('striptags', 'string'));
        $function_description->addValidators(array(
            new PresenceOf(array(
                'message' => 'function Description is required'
                    ))
        ));
        $this->add($function_description);

        $function_version = new Text("function Version");
        $function_version->setLabel("Function_Version");
        $function_version->setFilters(array('striptags', 'string'));
        $function_version->addValidators(array(
            new PresenceOf(array(
                'message' => 'function version is required'
                    ))
        ));
        $this->add($function_version);

        $function_code = new Text("function Code");
        $function_code->setLabel("Function_Code");
        $function_code->setFilters(array('striptags', 'string'));
        $function_code->addValidators(array(
            new PresenceOf(array(
                'message' => 'function code is required'
                    ))
        ));
        $this->add($function_code);

        $flag_datos = new Text("Flag Datos");
        $flag_datos->setLabel("Flag_Datos");
        $flag_datos->setFilters(array('striptags', 'string'));
        $flag_datos->addValidators(array(
            new PresenceOf(array(
                'message' => 'Flag input is required'
                    ))
        ));
        $this->add($flag_datos);

        $get_datos = new Text("Program Name");
        $get_datos->setLabel("Program_Name");
        $get_datos->setFilters(array('striptags', 'string'));
        $get_datos->addValidators(array(
            new PresenceOf(array(
                'message' => 'Program Name is required'
                    ))
        ));
        $this->add($get_datos);

        $include_exec = new Text("Program Name");
        $include_exec->setLabel("Program_Name");
        $include_exec->setFilters(array('striptags', 'string'));
        $include_exec->addValidators(array(
            new PresenceOf(array(
                'message' => 'Program Name is required'
                    ))
        ));
        $this->add($include_exec);
    }

}
