<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private DateTimeImmutable $createdAt;
    #[ORM\Column(length: 255)]
    private ?string $matricule = null;
    #[ORM\Column(length: 255)]
    private ?string $numAttestation = null;
    #[ORM\Column(length: 255)]
    private ?string $lycee = null;
    #[ORM\Column(length: 255)]
    private ?string $nom = null;
    #[ORM\Column(length: 255)]
    private ?string $prenom = null;
    #[ORM\Column(length: 255)]
    private ?string $sexe = null;
    #[ORM\Column(length: 255)]
    private ?string $dateNaissance = null;
    #[ORM\Column(length: 255)]
    private ?string $dateNaissanceCenou = null;
    #[ORM\Column(length: 255)]
    private ?string $lieuNaissance = null;
    #[ORM\Column(length: 255)]
    private ?string $pays_naiss = null;
    #[ORM\Column(length: 255)]
    private ?string $nationalite = null;
    #[ORM\Column(length: 255)]
    private ?string $phone = null;
    #[ORM\Column(length: 255)]
    private ?string $nompere = null;
    #[ORM\Column(length: 255)]
    private ?string $prenompere = null;
    #[ORM\Column(length: 255)]
    private ?string $nommere = null;
    #[ORM\Column(length: 255)]
    private ?string $prenommere = null;
    #[ORM\Column(length: 255)]
    private ?string $matriculeDEF = null;
    #[ORM\Column(length: 255)]
    private ?string $anneeBac = null;
    #[ORM\Column(length: 255)]
    private ?string $serie = null;
    #[ORM\Column(length: 255)]
    private ?string $numPlace = null;
    #[ORM\Column(length: 255)]
    private ?string $statut = null;
    #[ORM\Column(length: 255)]
    private ?string $centreBac = null;
    #[ORM\Column(length: 255)]
    private ?string $ae = null;
    #[ORM\Column(length: 255)]
    private ?string $adresseparent = null;
    #[ORM\Column(length: 255)]
    private ?string $phone1 = null;
    #[ORM\Column(length: 255)]
    private ?string $etablissement = null;
    #[ORM\Column(length: 255)]
    private ?string $idBanq = null;
    #[ORM\Column(length: 255)]
    private ?string $scolarite = null;
    #[ORM\Column(length: 255)]
    private ?string $bacMention = null;
    #[ORM\Column(length: 255)]
    private ?string $moyenneEcrit = null;
    #[ORM\Column(length: 255)]
    private ?string $moyenneAnuelle = null;
    #[ORM\Column(length: 255)]
    private ?string $moyenneAdmission = null;
    #[ORM\Column(length: 255)]
    private ?string $anneeNaissance = null;
    #[ORM\Column(length: 255)]
    private ?string $anneeDEF = null;
    #[ORM\Column(length: 255)]
    private ?string $scolariteNew = null;
    #[ORM\Column(length: 255)]
    private ?string $scolariteNew2 = null;
    #[ORM\Column(length: 255)]
    private ?string $age = null;
    #[ORM\Column(length: 255)]
    private ?string $inscriptibiliteAge = null;
    #[ORM\Column(length: 255)]
    private ?string $inscriptibiliteNationale = null;
    #[ORM\Column(length: 255)]
    private ?string $inscriptibiliteGenerale = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeImmutable $createdAt
     * @return Student
     */
    public function setCreatedAt(DateTimeImmutable $createdAt): Student
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    /**
     * @param string|null $matricule
     * @return Student
     */
    public function setMatricule(?string $matricule): Student
    {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumAttestation(): ?string
    {
        return $this->numAttestation;
    }

    /**
     * @param string|null $numAttestation
     * @return Student
     */
    public function setNumAttestation(?string $numAttestation): Student
    {
        $this->numAttestation = $numAttestation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLycee(): ?string
    {
        return $this->lycee;
    }

    /**
     * @param string|null $lycee
     * @return Student
     */
    public function setLycee(?string $lycee): Student
    {
        $this->lycee = $lycee;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     * @return Student
     */
    public function setNom(?string $nom): Student
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     * @return Student
     */
    public function setPrenom(?string $prenom): Student
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * @param string|null $sexe
     * @return Student
     */
    public function setSexe(?string $sexe): Student
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    /**
     * @param string|null $dateNaissance
     * @return Student
     */
    public function setDateNaissance(?string $dateNaissance): Student
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateNaissanceCenou(): ?string
    {
        return $this->dateNaissanceCenou;
    }

    /**
     * @param string|null $dateNaissanceCenou
     * @return Student
     */
    public function setDateNaissanceCenou(?string $dateNaissanceCenou): Student
    {
        $this->dateNaissanceCenou = $dateNaissanceCenou;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    /**
     * @param string|null $lieuNaissance
     * @return Student
     */
    public function setLieuNaissance(?string $lieuNaissance): Student
    {
        $this->lieuNaissance = $lieuNaissance;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaysNaiss(): ?string
    {
        return $this->pays_naiss;
    }

    /**
     * @param string|null $pays_naiss
     * @return Student
     */
    public function setPaysNaiss(?string $pays_naiss): Student
    {
        $this->pays_naiss = $pays_naiss;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    /**
     * @param string|null $nationalite
     * @return Student
     */
    public function setNationalite(?string $nationalite): Student
    {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return Student
     */
    public function setPhone(?string $phone): Student
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNompere(): ?string
    {
        return $this->nompere;
    }

    /**
     * @param string|null $nompere
     * @return Student
     */
    public function setNompere(?string $nompere): Student
    {
        $this->nompere = $nompere;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenompere(): ?string
    {
        return $this->prenompere;
    }

    /**
     * @param string|null $prenompere
     * @return Student
     */
    public function setPrenompere(?string $prenompere): Student
    {
        $this->prenompere = $prenompere;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNommere(): ?string
    {
        return $this->nommere;
    }

    /**
     * @param string|null $nommere
     * @return Student
     */
    public function setNommere(?string $nommere): Student
    {
        $this->nommere = $nommere;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenommere(): ?string
    {
        return $this->prenommere;
    }

    /**
     * @param string|null $prenommere
     * @return Student
     */
    public function setPrenommere(?string $prenommere): Student
    {
        $this->prenommere = $prenommere;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMatriculeDEF(): ?string
    {
        return $this->matriculeDEF;
    }

    /**
     * @param string|null $matriculeDEF
     * @return Student
     */
    public function setMatriculeDEF(?string $matriculeDEF): Student
    {
        $this->matriculeDEF = $matriculeDEF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnneeBac(): ?string
    {
        return $this->anneeBac;
    }

    /**
     * @param string|null $anneeBac
     * @return Student
     */
    public function setAnneeBac(?string $anneeBac): Student
    {
        $this->anneeBac = $anneeBac;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSerie(): ?string
    {
        return $this->serie;
    }

    /**
     * @param string|null $serie
     * @return Student
     */
    public function setSerie(?string $serie): Student
    {
        $this->serie = $serie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumPlace(): ?string
    {
        return $this->numPlace;
    }

    /**
     * @param string|null $numPlace
     * @return Student
     */
    public function setNumPlace(?string $numPlace): Student
    {
        $this->numPlace = $numPlace;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param string|null $statut
     * @return Student
     */
    public function setStatut(?string $statut): Student
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCentreBac(): ?string
    {
        return $this->centreBac;
    }

    /**
     * @param string|null $centreBac
     * @return Student
     */
    public function setCentreBac(?string $centreBac): Student
    {
        $this->centreBac = $centreBac;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAe(): ?string
    {
        return $this->ae;
    }

    /**
     * @param string|null $ae
     * @return Student
     */
    public function setAe(?string $ae): Student
    {
        $this->ae = $ae;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseparent(): ?string
    {
        return $this->adresseparent;
    }

    /**
     * @param string|null $adresseparent
     * @return Student
     */
    public function setAdresseparent(?string $adresseparent): Student
    {
        $this->adresseparent = $adresseparent;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    /**
     * @param string|null $phone1
     * @return Student
     */
    public function setPhone1(?string $phone1): Student
    {
        $this->phone1 = $phone1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    /**
     * @param string|null $etablissement
     * @return Student
     */
    public function setEtablissement(?string $etablissement): Student
    {
        $this->etablissement = $etablissement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdBanq(): ?string
    {
        return $this->idBanq;
    }

    /**
     * @param string|null $idBanq
     * @return Student
     */
    public function setIdBanq(?string $idBanq): Student
    {
        $this->idBanq = $idBanq;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScolarite(): ?string
    {
        return $this->scolarite;
    }

    /**
     * @param string|null $scolarite
     * @return Student
     */
    public function setScolarite(?string $scolarite): Student
    {
        $this->scolarite = $scolarite;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBacMention(): ?string
    {
        return $this->bacMention;
    }

    /**
     * @param string|null $bacMention
     * @return Student
     */
    public function setBacMention(?string $bacMention): Student
    {
        $this->bacMention = $bacMention;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoyenneEcrit(): ?string
    {
        return $this->moyenneEcrit;
    }

    /**
     * @param string|null $moyenneEcrit
     * @return Student
     */
    public function setMoyenneEcrit(?string $moyenneEcrit): Student
    {
        $this->moyenneEcrit = $moyenneEcrit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoyenneAnuelle(): ?string
    {
        return $this->moyenneAnuelle;
    }

    /**
     * @param string|null $moyenneAnuelle
     * @return Student
     */
    public function setMoyenneAnuelle(?string $moyenneAnuelle): Student
    {
        $this->moyenneAnuelle = $moyenneAnuelle;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoyenneAdmission(): ?string
    {
        return $this->moyenneAdmission;
    }

    /**
     * @param string|null $moyenneAdmission
     * @return Student
     */
    public function setMoyenneAdmission(?string $moyenneAdmission): Student
    {
        $this->moyenneAdmission = $moyenneAdmission;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnneeNaissance(): ?string
    {
        return $this->anneeNaissance;
    }

    /**
     * @param string|null $anneeNaissance
     * @return Student
     */
    public function setAnneeNaissance(?string $anneeNaissance): Student
    {
        $this->anneeNaissance = $anneeNaissance;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnneeDEF(): ?string
    {
        return $this->anneeDEF;
    }

    /**
     * @param string|null $anneeDEF
     * @return Student
     */
    public function setAnneeDEF(?string $anneeDEF): Student
    {
        $this->anneeDEF = $anneeDEF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScolariteNew(): ?string
    {
        return $this->scolariteNew;
    }

    /**
     * @param string|null $scolariteNew
     * @return Student
     */
    public function setScolariteNew(?string $scolariteNew): Student
    {
        $this->scolariteNew = $scolariteNew;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScolariteNew2(): ?string
    {
        return $this->scolariteNew2;
    }

    /**
     * @param string|null $scolariteNew2
     * @return Student
     */
    public function setScolariteNew2(?string $scolariteNew2): Student
    {
        $this->scolariteNew2 = $scolariteNew2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAge(): ?string
    {
        return $this->age;
    }

    /**
     * @param string|null $age
     * @return Student
     */
    public function setAge(?string $age): Student
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscriptibiliteAge(): ?string
    {
        return $this->inscriptibiliteAge;
    }

    /**
     * @param string|null $inscriptibiliteAge
     * @return Student
     */
    public function setInscriptibiliteAge(?string $inscriptibiliteAge): Student
    {
        $this->inscriptibiliteAge = $inscriptibiliteAge;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscriptibiliteNationale(): ?string
    {
        return $this->inscriptibiliteNationale;
    }

    /**
     * @param string|null $inscriptibiliteNationale
     * @return Student
     */
    public function setInscriptibiliteNationale(?string $inscriptibiliteNationale): Student
    {
        $this->inscriptibiliteNationale = $inscriptibiliteNationale;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscriptibiliteGenerale(): ?string
    {
        return $this->inscriptibiliteGenerale;
    }

    /**
     * @param string|null $inscriptibiliteGenerale
     * @return Student
     */
    public function setInscriptibiliteGenerale(?string $inscriptibiliteGenerale): Student
    {
        $this->inscriptibiliteGenerale = $inscriptibiliteGenerale;
        return $this;
    }


    public function jsonSerialize(): array
    {
        return [$this->getId(),$this->getMatricule(),$this->getNom(),$this->getPrenom()];
    }
}
