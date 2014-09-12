<?php
class View
{
    public function render($name, $data = array())
    {
        if(!empty($data)){
            extract($data);
        }
        require("inc/view/header.php");
        require("inc/view/".$name.".php");
        require("inc/view/footer.php");
    }
}
