<?php

class View
{
    protected string $template;

    protected string $layout;

    protected array $data = array();

    public function __construct(string $template, array $data = [], string $layout = 'default.html.php')
    {
        $this->template = $template;
        $this->layout = $layout;
        $this->data = $data;
    }

    public function render($data = [])
    {
        extract($this->data);
        ob_start();
        require '../templates/' . $this->template;
        $content = ob_get_clean();

        require '../templates/' . $this->layout;
    }
}
