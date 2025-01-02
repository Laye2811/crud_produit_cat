<?php
function getAllEtudiants($conn) {
    $query = "SELECT * FROM etudiants";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function addEtudiant($conn, $nom, $prenom, $email, $filiere) {
    $stmt = $conn->prepare("INSERT INTO etudiants (nom, prenom, email, filiere) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $prenom, $email, $filiere);
    return $stmt->execute();
}

function updateEtudiant($conn, $id, $nom, $prenom, $email, $filiere) {
    $stmt = $conn->prepare("UPDATE etudiants SET nom=?, prenom=?, email=?, filiere=? WHERE id=?");
    $stmt->bind_param("ssssi", $nom, $prenom, $email, $filiere, $id);
    return $stmt->execute();
}

function deleteEtudiant($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM etudiants WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>
