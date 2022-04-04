<?php
class ErrorMessages{

    //ERROR_CONTROLLER_METHOS_ACTION
    const ERROR_ADMIN_NEWCATEGORY_EXISTS="001";
    
    private $errorLost=[];

    public function __construct()
    {
        $this->errorList=[
            ErrorMessages::ERROR_ADMIN_NEWCATEGORY_EXISTS=>"El nombre de la categora ya existe"

        ];
    }


}
?>