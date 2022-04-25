<?php

class UtilisateurManager extends Manager
{

    public const TABLE_utilisateur = "utilisateur";

    public function getAllUtilisateur()
    {

        $sql = "SELECT * FROM " . self::TABLE_utilisateur;
        $query = $this->getPdo()->query($sql);
        return $query->fetchAll();
    }

    public function getUtilisateurbyId(int $id)
    {

        $sql = "SELECT * FROM " . self::TABLE_utilisateur . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id
        ]);

        return $query->fetch();
    }

    public function addUtilisateur(string $prenom, string $nom, string $ville, string $email, string $mot_de_passe, string $date_naissance)
    {
            
            $sql = "INSERT INTO " . self::TABLE_utilisateur . " (prenom,nom,ville,email,creation_client,mot_de_passe,date_naissance) VALUES (:prenom,:nom,:ville,:email, NOW(), :mot_de_passe,:date_naissance)";
            $query = $this->getPdo()->prepare($sql);
            $query->execute([
                'prenom' => $prenom,
                'nom' => $nom,
                'ville' => $ville,
                'email' => $email,
                'mot_de_passe' => $mot_de_passe,
                'date_naissance' => $date_naissance,
            ]);
    
            return $query->fetch();
    }
}