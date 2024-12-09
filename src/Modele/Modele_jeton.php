<?php

namespace App\Modele;
use App\Utilitaire\Singleton_ConnexionPDO;
use PDO;

class Modele_jeton
{

    /**
     * @param $connexionPDO : connexion à la base de données
     */
    public static function InsertJeton(int $idUtilisateur, int $codeAction)

    // Inserer le token dans la BDD
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();

        $dateFin = date('Y-m-d',strtotime("+1 hour"));
        $octetsAleatoires = openssl_random_pseudo_bytes (256) ;
        $token = sodium_bin2base64($octetsAleatoires, SODIUM_BASE64_VARIANT_ORIGINAL);

        $requetePreparee = $connexionPDO->prepare(
            'INSERT INTO token (valeur, codeAction,idUtilisateur,dateFin)
            VALUES (:valeur, :codeAction, :idUtilisateur ,:dateFin);');
        $requetePreparee->bindValue(':valeur', $token);
        $requetePreparee->bindValue(':codeAction', $codeAction);
        $requetePreparee->bindValue(':idUtilisateur', $idUtilisateur);
        $requetePreparee->bindValue(':dateFin', $dateFin);
        $reponse = $requetePreparee->execute(); //$reponse boolean sur l'état de la requête
        return $reponse;
    }


    public static function UpdateJeton(int $id): bool
    {
        // update le token dans la BDD
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare(
            'UPDATE `token` 
            SET `codeAction` = :codeAction
            WHERE id = :id ');
        $requetePreparee->bindValue(':id', $id);
        $requetePreparee->bindValue(':codeAction', 0);
        $reponse = $requetePreparee->execute();
        return $reponse;
    }

    public static function Research( string $token)
    {
        // rechercher un token par sa valeur
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare(
            'SELECT * 
            FROM `token`
            WHERE valeur = :valeur');
        $requetePreparee->bindValue(':valeur', $token);
        $reponse = $requetePreparee->execute();
        return $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
    }
}