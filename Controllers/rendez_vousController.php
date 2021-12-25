<?php
    class rendez_vousController
    {
        private $_view;
        private $_manager;
    
        public function __construct($url)
        {
            if(isset($url) && $url && count($url) > 1)
            {
                throw new Exception('Page introuvable');
            }
            else
            {
                $this->add();
                //$this->doctors();
                //$this->dep();
            }
        }
        private function add()
        {
            $this->_manager = new AppointmentManager;
            // take appoinment not implemented correctly GH
            //    $apps = $this->_manager->takeAppointment();

            $apps = $this->_manager->getAppointment();
            //-----------------------------------------------------
            $this->_manager = new DepartementManager;
            $dep = $this->_manager->getDepartements();
            //--------------------------------------------------------
            $this->_doctormanager = new DoctorManager;
            $docs = $this->_doctormanager->getDoctors();

            //doctor name and departement showing in the same case !!! looking for solution
            $this->_view = new View('rendez_vous');
            $this->_view->generate(array('appointment' => $apps,'departement'=>$dep,'doctor'=>$docs));
        }




        
// // show the deps name for the patient
//         private function dep()
//         {
//             $this->_manager = new DepartementManager;
//             $dep = $this->_manager->getDepartements();
    
//             $this->_view = new View('rendez_vous');
//             $this->_view->generate(array('departement' => $dep));
//         }
// //show the doctors name 
//         private function doctors()
//     {
//         $this->_doctormanager = new DoctorManager;
//         $docs = $this->_doctormanager->getDoctors();

//         $this->_view = new View('rendez_vous');
//         $this->_view->generate(array('doctor' => $docs));
//     }
    }
?>