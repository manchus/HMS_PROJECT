<?php

class RendezvousManager extends Model
{
    public function getRendezvous()
    {
        $this->getBdd();
        return $this->getAll('appointment','Appointment');
    }
    public function getPatient()
    {
        $this->getBdd();
        return $this->getAll('patient','Patient');
    }

    public function getMedecin()
    {
        $this->getBdd();
        return $this->getAll('doctor','Doctor');
    }

    public function deleteRendezvous()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->delete('appointment','Appointment',$id);
        }
    }
    public function addRendezvous()
    {
        $this->getBdd();
        if(isset($_POST["add"]) && !empty($_POST))
        {
            
            echo "<script>window.location.href = '/HMS_PROJECT/liste_rendezvous';</script>";
            return $this->addAppointment('appointment',$_POST["id_patient"],$_POST["id_medecin"],
            $_POST["date_rendezvous"],$_POST["heure_rendezvous"],'Appointment');

        }
    }
    public function updateRendezvous()
    {
        $this->getBdd();
        if(isset($_POST["update"]) && !empty($_POST))
        {
            //var_dump($_POST);
            //var_dump($_GET);
            echo "<script>window.location.href = '/HMS_PROJECT/liste_rendezvous';</script>";
            return $this->updateAppointment('appointment',$_POST["id_patient"],$_POST["id_medecin"],
            $_POST["date_rendezvous"],$_POST["heure_rendezvous"],'Appointment',$_GET["id"]);
        }
    }

}

?>