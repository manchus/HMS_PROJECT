<?php
require_once('Views/View.php');

class ajout_rendezvousController
{
    private $_view;
    private $_nursemanager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->rendezvous();
        }
    }

    private function rendezvous()
    {
        $this->_nursemanager = new RendezvousManager;
        $docs = $this->_nursemanager->addRendezvous();
        $pat = $this->_nursemanager->getPatient();
        $med = $this->_nursemanager->getMedecin();

        $this->_view = new View('ajout_rendezvous');
        $this->_view->generate(array('rendezvous' => $docs,'patient'=>$pat,'medecin'=>$med));
    }
}
?>