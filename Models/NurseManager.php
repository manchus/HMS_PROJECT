<?php
class NurseManager extends Model
{
    public function getNurses()
    {
        $this->getBdd();
        return $this->getAll('nurse','Nurse');
    }
    public function getNurseDetail()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->details('nurse','Nurse','id',$id);
        }
    }
    public function updatenurse()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            if(isset($_POST["update"]) && !empty($_POST) && isset($_FILES['photo']['name']))
            {
                $id = $_GET["id"];
                echo "<script>window.location.href = '/HMS_PROJECT/liste_infirmier';</script>";
                return $this->updateDoctors('nurse',$_POST["nom"],
                $_POST["prenom"],$_POST["ddn"],
                $_POST["email"],$_POST["adresse"],$_POST["code_postal"],
                $_POST["ville"],$_POST["province"],$_POST["telephone"],
                'Nurse',$id);
                $confirm = "La modification de l'infirmier a été effectué avec succès!";
            }
        }
    }
    public function deletenurse()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->delete('nurse','Nurse',$id);
        }
    }
    public function addNurse()
    {
        $this->getBdd();
        if(isset($_POST["add"]) && !empty($_POST) && isset($_FILES['photo']['name']))
        {
            echo "<script>window.location.href = '/HMS_PROJECT/liste_infirmier';</script>";
            return $this->addDoctors('nurse',$_POST["nom"],
            $_POST["prenom"],$_POST["ddn"],$_FILES["photo"]["name"],
            $_POST["email"],$_POST["adresse"],$_POST["code_postal"],
            $_POST["ville"],$_POST["province"],$_POST["telephone"],
            $_FILES["cv"]["name"],$_POST["mdp"],'Nurse');
            $confirm = "L'ajout de l'infirmie a été effectué avec succès!";
        }
    }
}
?>