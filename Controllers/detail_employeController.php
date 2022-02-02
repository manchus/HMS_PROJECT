<?php
require_once('Views/View.php');

class detail_employeController
{
    private $_view;
    private $_employemanager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->nursedetail();
        }
    }

    private function nursedetail()
    {
        $this->_employemanager = new EmployeManager;
        $employ = $this->_employemanager->getEmployes();
        //GetEmployes must be getEmployeDetails for one employ not for all
        //$employ = $this->_employemanager->getEmployeDetail();

        $this->_view = new View('detail_employe');
        $this->_view->generate(array('employe' => $employ));
    }
}
?>