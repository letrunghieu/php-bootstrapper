<?php

namespace HieuLe\PhpBootstrapper;

/**
 * Description of Alert
 *
 * @author TrungHieu
 */
class Alert extends \Illuminate\Support\MessageBag
{

    protected $session;
    protected $levels = array(
	'success', 'info', 'warning', 'danger'
    );
    protected $config;

    public function __construct(\Illuminate\Session\Store $session, \Illuminate\Config\Repository $config, $messages = array())
    {
	$this->session = $session;
	$this->config = $config;

	if ($session->has($this->_getSessionKey()))
	{
	    $messages = array_merge_recursive(
		    $session->get($this->_getSessionKey()), $messages
	    );
	}

	parent::__construct($messages);
    }

    public function flash()
    {
	$this->session->flash($this->_getSessionKey(), $this->messages);

	return $this;
    }

    public function all($container = 'p')
    {
	$all = array();
	foreach ($this->messages as $key => $messages)
	{
	    $icons  = $this->_getIcons();
	    $content = "";
	    foreach ($messages as $m)
	    {
		$content .= "<{$container}>{$m}</{$container}>\n";
	    }
	    if (isset($icons[$key]))
		$content = $icons[$key] . $content;
	    $all[] = Component::alert($content, $key, true);
	}

	return $all;
    }

    public function __call($name, $arguments)
    {
	if (in_array($name, $this->levels))
	{
	    return $this->add($name, $arguments[0]);
	}
	throw new \BadMethodCallException("There is no method called {$name}");
    }
    
    private function _getSessionKey()
    {
	return $this->config->get('php-bootstrapper::alert.session_key');
    }
    
    private function _getIcons()
    {
	return $this->config->get('php-bootstrapper::alert.icons');
    }

}

?>
