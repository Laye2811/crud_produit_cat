<?php
function getAllCours($conn) {
    $query = "SELECT * FROM cours";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function addCours($conn, $nom_cours, $code_cours, $nombre_heures) {
    $stmt = $conn->prepare("INSERT INTO cours (nom_cours, code_cours, nombre_heures) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $nom_cours, $code_cours, $nombre_heures);
    return $stmt->execute();
}

function updateCours($conn, $id, $nom_cours, $code_cours, $nombre_heures) {
    $stmt = $conn->prepare("UPDATE cours SET nom_cours=?, code_cours=?, nombre_heures=? WHERE id=?");
    $stmt->bind_param("ssii", $nom_cours, $code_cours, $nombre_heures, $id);
    return $stmt->execute();
}

function deleteCours($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM cours WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>
