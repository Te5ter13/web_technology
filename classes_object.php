<h1>Classes and Objects representation</h1>
<?php

class Coding{
    //Properties:
    public $program;
    public $editor;
    //Methods
    function set_program($program){
        $this->program=$program;
    }
    function get_program(){
        return $this->program;
    }
    function set_editor($editor){
        $this->editor=$editor;
    }
    function get_editor(){
        return $this->editor;
    }
}
$first = new Coding();
$first->set_program('Python');
$first->set_editor('Nvim');
$second = new Coding();
$second->set_program('C');
$second->set_editor('Visual Studio Code');


echo "I love to code '".$first->get_program()."' program in '".$first->get_editor()."'";
echo "<br> Also ";
echo "Coding  '".$second->get_program()."' in '".$second->get_editor()."' is great.";
?>


