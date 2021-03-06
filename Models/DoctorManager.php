<?php

class DoctorManager extends Model
{
    public function getDoctors()
    {
        $this->getBdd();
        return $this->getAll('doctor','Doctor');
    }
    public function getDoctorDetail()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->details('doctor','Doctor','id',$id);
        }
    }
    public function updatedoctor()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            if(isset($_POST["update"]))
            {
                if(!empty($_POST))
                {
                    $id = $_GET["id"];
                    echo "<script>window.location.href = '/HMS_PROJECT/liste_medecin';</script>";
                    return $this->updateDoctors('doctor',$_POST["nom"],
                    $_POST["prenom"],$_POST["ddn"],
                    $_POST["email"],$_POST["adresse"],$_POST["code_postal"],
                    $_POST["ville"],$_POST["province"],$_POST["telephone"],
                    'Doctor',$id);
                    $confirm = "La modification du médecin a été effectué avec succès!";
                }  
            }
        }
    }
    public function deletedoctor()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->delete('doctor','Doctor',$id);
        }
    }
    public function adddoctor()
    {
        $this->getBdd();
        if(isset($_POST["add"]) && !empty($_POST))
        {
            echo "<script>window.location.href = '/HMS_PROJECT/liste_medecin';</script>";
            return $this->addDoctors('doctor',$_POST["nom"],
            $_POST["prenom"],$_POST["ddn"],$_FILES['photo']['name'],
            $_POST["email"],$_POST["adresse"],$_POST["code_postal"],
            $_POST["ville"],$_POST["province"],$_POST["telephone"],
            $_FILES['cv']['name'],$_POST["mdp"],'Doctor');
        }
    }
}

?>