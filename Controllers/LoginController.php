<?php
require_once('Views/View.php');

class LoginController
{
    private $_view;
    private $_adminmanager;
    private $_patientmanager;
    private $_employemanager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            // automatisation des logins pour chaques fucntion == need more concentration.!!
            
            //$this->loginAdmins();
            $this->loginPatients();
            //$this->loginEmployee();
        }
    }

    private function loginAdmins()
    {
        $this->_adminmanager = new AdminManager;
        $admin = $this->_adminmanager->loginAdmin();

        $this->_view = new View('login');
        echo array('administrator' => $admin);
        $this->_view->generate(array('administrator' => $admin));
    }

    private function loginPatients()
    {
        $this->_patientmanager = new PatientManager;
        $pat = $this->_patientmanager->loginPatient();
        
        $this->_view = new View('login');
        echo array('patient' => $pat);
        $this->_view->generate(array('patient' => $pat));
    }

    private function loginEmployee()
    {
        $this->_employemanager = new EmployeManager;
        $emp = $this->_employemanager->loginEmployee();
        
        $this->_view = new View('login');
        echo array('employee' => $emp);
        $this->_view->generate(array('employee' => $emp));
    }
}
?>