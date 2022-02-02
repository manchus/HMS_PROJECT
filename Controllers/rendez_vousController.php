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
                $this->show();
            
            }
        }
        private function show()
        {
            // take appoinment not implemented correctly GH
            $this->_manager = new AppointmentManager;
            $apps = $this->_manager->PatientRendezvous();

            $apps = $this->_manager->getAppointment();
            //-----------------------------------------------------
            $this->_manager = new DepartementManager;
            $dep = $this->_manager->getDepartements();
            //--------------------------------------------------------
            $this->_doctormanager = new DoctorManager;
            $docs = $this->_doctormanager->getDoctors();

            //showing doctor name and departement  
            $this->_view = new View('rendez_vous');
            $this->_view->generate(array('appointment' => $apps,'departement'=>$dep,'doctor'=>$docs));


            
        }
    }
?>