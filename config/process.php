<?php

session_start();

include_once("connection.php");

$data = $_POST;

if(!empty($data)) {

    if($data["type"] === "create") {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $observations = $_POST["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUE (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contact registered successfully!";
            
        } catch(PDOException $e) {
            echo "<br><br> Error: " . $e->getMessage();
        }
    }elseif($data["type"] === "edit") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contact edited successfully!";
            
        } catch(PDOException $e) {
            echo "<br><br> Error: " . $e->getMessage();
        }
  
    } elseif($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contact deleted successfully!";
            
        } catch(PDOException $e) {
            echo "<br><br> Error: " . $e->getMessage();
        }
    }

    // BACK TO HOME
        header("Location: ../index.php");

} else{

    // DATA SELECTION
    $id;
    
    if(!empty($_GET)) {
        $id = $_GET['id'];
    }
    
    // only one contact
    if(!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
    
        $stmt = $conn->prepare($query);
    
        $stmt->bindParam(":id", $id);
    
        $stmt->execute();
    
        $contact = $stmt->fetch();
    } else {
        // All contacts
        $contacts = [];
    
        $query = "SELECT * FROM contacts";
    
        $stmt = $conn->prepare($query);
    
        $stmt->execute();
    
        $contacts = $stmt->fetchAll(); 
    }
}

$conn = null;