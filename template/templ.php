<?
class Template {
    private $path = "tpl/";
	private $templ;
	private $arr = array();

	function __construct($templ = "") {
		$this->templ = $templ;
	}

    function tpl($templ) {
        $this->__construct($templ);
    }

	function set($name, $value) {
		$this->arr[$name] = $value;
	}

	function __get($name) {
		if (isset($this->arr[$name])) return $this->arr[$name];
		return "";
	}

	function html() {
        include($this->path.$this->templ);
	}
}
?>
