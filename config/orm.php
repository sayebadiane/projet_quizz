<?php 
///recuperation des donnée du fichier
function json_to_array(string $key):array{
    $datajson=file_get_contents(PATH_DB);
    $data=json_decode($datajson,true);
    return $data[$key];
}
/// Enregistrer et mise a jour des donne du fichier
function array_to_json(string $key, array $data):array{
    return [];

}
