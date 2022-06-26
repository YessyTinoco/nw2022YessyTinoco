<?php 
    namespace Controllers\NW202202;

    use Controllers\PublicController;
    use Views\Renderer;

    class PrimerForm extends PublicController{
        public function run() :void{
           // die("Eureka Funcionó");
            $viewData = array();
            $viewData["txtNombre"] = "Fulanito";
            $viewData["txtApellido"] = "Perez";
            if(isset($POST["btnEnviar"])){
                $viewData["txtNombre"] = $_POST["txtNombre"];
            }
            if ($this->isPostBack()){
                $viewData["txtApellido"] = $_POST["txtApellido"];
            }
            Renderer::render("nw202202/primerform", $viewData);
        }

    }
?>