<?php
class Template {
    private $path_to_templates_directory = "tpl/";
	private $template_filename;
	private $array_with_new_vars_names_values = array();

	function __construct($templ = '') {
		$this->template_filename = $templ;
	}

    function tpl($templ) {
        $this->__construct($templ);
    }

	function set($name, $value) {
        $this->check_vars($name);
		$this->array_with_new_vars_names_values[$name] = $value;
	}

	function __get($name) {
        if (isset($this->array_with_new_vars_names_values[$name])) {
           return $this->array_with_new_vars_names_values[$name];
        }
		return '';
	}

	function __toString() {
        include($this->path_to_templates_directory.$this->template_filename);
        return '';
	}

    function check_vars($new_var) {
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            if ($new_var == $name) {
                throw new Exception('Error in "set" method. This field name (' . $name . ') is allready resolved');
            }
        }
    }
}
?>
