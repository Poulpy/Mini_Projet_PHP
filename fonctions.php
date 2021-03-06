<?php 

    require_once("config.php");

    function afficherErreur($erreur) {
        ?>
        
        <div class="form-control-feedback alert alert-danger alert-dismissible fade show" role="alert">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>

        <span class="text-danger align-middle">
        <i class="fa fa-close"></i><strong> Erreur :</strong> <?php echo $erreur; ?>
        </span>

        </div> 

        <?php
    }
    
    function afficherSucces($message) {
        ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            <span class="text-success align-middle">
                <i class="fa fa-close"></i><strong> Succès :</strong> <?php echo $message; ?>
            </span>

        <?php
    }

    function estConnecte() {
        
        $roles = array("admin", "etudiant", "professeur");
        if (isset($_SESSION['id']) AND isset($_SESSION['role'])) {
            
            if ( (!empty($_SESSION['id'])) AND in_array($_SESSION['role'], $roles) ) {
                return TRUE;
            }
        }
        return FALSE;
    }

    function redirigerBonnePage() {

        if (estConnecte()) {

            if ($_SESSION['role'] == "admin") { #Si il s'agit d'un admin
                header('Location: admin.php');
                exit;
            }
            else if ($_SESSION['role'] == "etudiant") { #Si il s'agit d'un étudiant
                header('Location: vote.php');
                exit;
            }
            else if ($_SESSION['role'] == "professeur") { #Sinon il s'agit d'un prof
                header('Location: prof.php');
                exit;
            }

        }
        else {
            header("Location: index.php");
            exit;
        }

    }
?>