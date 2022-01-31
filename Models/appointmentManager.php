<?php

class AppointmentManager extends Model
{
    /*public function takeAppointment()
    {
        $this->getBdd();
        if(isset($_POST["take"]) && !empty($_POST))
        {
            $id_medecin = $_POST["id_medecin"];
            $date = $_POST["date"];
            $heure = $_POST["heure"];
            return $this->addAppointment("appointment","Appointment",3,$id_medecin,$date,$heure);
        }
    }*/
    //==================Patient take appointement==================
    public function PatientRendezvous()
    {
        $this->getBdd();
        if(isset($_POST["take"]) && !empty($_POST))
        {
            
            echo "<script>window.location.href = '/HMS_PROJECT/rendez_vous';</script>";
            return $this->AppointmentFromPatient('patientappointement',$_POST["id_patient"],$_POST["departement"],
            $_POST["id_doctor"],$_POST["date_rendezvous"],$_POST["heure_rendezvous"], 'Patientappointement');
            
            echo '<script>alert("Votre rendez vous a été bien ajouté");</script>';

        }

    }
    public function getAppointment()
    {
        $this->getBdd();
        return $this->getAll("appointment","Appointment");
    }
    public function getAppointmentDetail()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
            return $this->details("appointment","Appointment","id",$_GET["id"]);
    }
}