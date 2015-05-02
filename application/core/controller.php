<?php

class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * @var null Model
     */
    public $model = null;

    /**
     * @var null Empty view array for data to be displayed in the view.
     */
    public $view = array();

    function __construct() {
        $this->loadModel();
    }

    /**
     * Loads the "model".
     * @return object model
     */
    public function loadModel() {
        $modelName = get_class($this) . '_Model';

        if (file_exists(APP . 'models/' . $modelName . '.php')) {
            $this->model = new $modelName();
        }
    }

    public function render($name = 'index')
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/' . get_class($this) . '/' . $name . '.php';
        require APP . 'view/_templates/footer.php';
    }

    public function redirect($url = "/") {
        session_write_close();
        header("Location: ".$url);
        exit;
    }
}
