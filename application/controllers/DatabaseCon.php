<?php

/**
 * Created by PhpStorm.
 * User: benam
 * Date: 28/01/2019
 * Time: 09:26
 */
class DatabaseCon extends CI_Controller
{
    public function __construct()
    {
        $this->load->library("parser"); //Template Parser Class
        $this->load->library("table"); // HTML Table Class
        $this->load->model("DatabaseMod", "enseignant"); //Chargement du modèle
    }

    public function index()
    {
        $result = $this->enseignant->GetAllEnseignant(); //Accès au modèle
        $data['TABLE'] = $this->table->generate($result); //Génère un tableau HTML
        $this->parser->parse("ViewDB.html", $data); //et le place dans la vue
    }

    public function DeleteEns($id)
    {
        $result = $this->enseignant->DeleteEnseignant($id); //Accès au modèle
        $this->index(); //Affichage
    }
}