<?php

// --- koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbKardistry");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function editClass($doc)
{
    global $koneksi;
    //ambil dari setiap elemen dalam form
    $id = ($doc["Id"]);
    $tutor = htmlspecialchars($doc["Ntutor"]);
    $kelas = htmlspecialchars($doc["Nkelas"]);
    $move = htmlspecialchars($doc["Nmove"]);
    $link = ($doc["Link"]);


    //update data
    $query = "UPDATE class SET
    Ntutor = '$tutor',
    Nkelas ='$kelas',
    Nmove = '$move',
    Link ='$link'
    WHERE Id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapusclass($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM class WHERE Id = $id ");
    return mysqli_affected_rows($koneksi);
}

function tambahClass($doc)
{
    global $koneksi;
    //ambil dari setiap elemen dalam form

    $tutor = htmlspecialchars($doc["Ntutor"]);
    $kelas = htmlspecialchars($doc["Nkelas"]);
    $move = htmlspecialchars($doc["Nmove"]);
    $link = $doc["Link"];


    //update data
    $query = "INSERT INTO class VALUES ('','$tutor','$kelas','$move','$link')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
