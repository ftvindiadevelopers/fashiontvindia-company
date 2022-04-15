
<?php
class Link{
    public $href;
    public $text;
    public $title;
    public $data;
    public $props = array();

    function __construct($href,$text,$title,$data)
    {
        $this->href = $href;
        $this->text = $text;
        $this->title = $title;
        $this->data = $data;
        $url = $_SERVER['REQUEST_URI'];
        if($href == $url){
            echo "<li class='nav-item active'><a class='nav-link' href='".$href."' title='".$title."' data-hover='".$data."'>".$text."</a></li>";
        }
        else{
            echo "<li class='nav-item'><a class='nav-link' href='".$href."' title='".$title."' data-hover='".$data."'>".$text."</a></li>";
        }
    }
}
?>
