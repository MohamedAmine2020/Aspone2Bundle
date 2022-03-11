<?php

namespace InterInvest\Aspone2Bundle\ClassXml\Ir;

/**
 * Class representing ZoneType
 *
 *
 * XSD Type: Zone
 */
class ZoneType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $valeur
     */
    private $valeur = null;

    /**
     * @property string $identifiant
     */
    private $identifiant = null;

    /**
     * @property string $designation
     */
    private $designation = null;

    /**
     * @property string $designationSuite1
     */
    private $designationSuite1 = null;

    /**
     * @property string $designationSuite2
     */
    private $designationSuite2 = null;

    /**
     * @property string $adresseNumero
     */
    private $adresseNumero = null;

    /**
     * @property string $adresseRepetabilite
     */
    private $adresseRepetabilite = null;

    /**
     * @property string $adresseVoie
     */
    private $adresseVoie = null;

    /**
     * @property string $adresseComplement
     */
    private $adresseComplement = null;

    /**
     * @property string $adresseHameau
     */
    private $adresseHameau = null;

    /**
     * @property string $adresseCodePostal
     */
    private $adresseCodePostal = null;

    /**
     * @property string $adresseVille
     */
    private $adresseVille = null;

    /**
     * @property string $adresseCodeDivisionTerritoriale
     */
    private $adresseCodeDivisionTerritoriale = null;

    /**
     * @property string $adresseDivisionTerritoriale
     */
    private $adresseDivisionTerritoriale = null;

    /**
     * @property string $adresseEtrangere1
     */
    private $adresseEtrangere1 = null;

    /**
     * @property string $adresseEtrangere2
     */
    private $adresseEtrangere2 = null;

    /**
     * @property string $adresseEtrangere3
     */
    private $adresseEtrangere3 = null;

    /**
     * @property string $adresseEtrangere4
     */
    private $adresseEtrangere4 = null;

    /**
     * @property string $telephone
     */
    private $telephone = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $texteLibre1
     */
    private $texteLibre1 = null;

    /**
     * @property string $texteLibre2
     */
    private $texteLibre2 = null;

    /**
     * @property string $texteLibre3
     */
    private $texteLibre3 = null;

    /**
     * @property string $texteLibre4
     */
    private $texteLibre4 = null;

    /**
     * @property string $texteLibre5
     */
    private $texteLibre5 = null;

    /**
     * @property string $iban
     */
    private $iban = null;

    /**
     * @property string $bic
     */
    private $bic = null;

    /**
     * @property string $titulaireDesignation
     */
    private $titulaireDesignation = null;

    /**
     * @property string $titulaireDesignationSuite
     */
    private $titulaireDesignationSuite = null;

    /**
     * @property \InterInvest\Aspone2Bundle\ClassXml\Ir\OccurrenceType[] $occurrence
     */
    private $occurrence = array(
        
    );

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Sets a new valeur
     *
     * @param string $valeur
     * @return self
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
        return $this;
    }

    /**
     * Gets as identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Sets a new identifiant
     *
     * @param string $identifiant
     * @return self
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * Gets as designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * @param string $designation
     * @return self
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Gets as designationSuite1
     *
     * @return string
     */
    public function getDesignationSuite1()
    {
        return $this->designationSuite1;
    }

    /**
     * Sets a new designationSuite1
     *
     * @param string $designationSuite1
     * @return self
     */
    public function setDesignationSuite1($designationSuite1)
    {
        $this->designationSuite1 = $designationSuite1;
        return $this;
    }

    /**
     * Gets as designationSuite2
     *
     * @return string
     */
    public function getDesignationSuite2()
    {
        return $this->designationSuite2;
    }

    /**
     * Sets a new designationSuite2
     *
     * @param string $designationSuite2
     * @return self
     */
    public function setDesignationSuite2($designationSuite2)
    {
        $this->designationSuite2 = $designationSuite2;
        return $this;
    }

    /**
     * Gets as adresseNumero
     *
     * @return string
     */
    public function getAdresseNumero()
    {
        return $this->adresseNumero;
    }

    /**
     * Sets a new adresseNumero
     *
     * @param string $adresseNumero
     * @return self
     */
    public function setAdresseNumero($adresseNumero)
    {
        $this->adresseNumero = $adresseNumero;
        return $this;
    }

    /**
     * Gets as adresseRepetabilite
     *
     * @return string
     */
    public function getAdresseRepetabilite()
    {
        return $this->adresseRepetabilite;
    }

    /**
     * Sets a new adresseRepetabilite
     *
     * @param string $adresseRepetabilite
     * @return self
     */
    public function setAdresseRepetabilite($adresseRepetabilite)
    {
        $this->adresseRepetabilite = $adresseRepetabilite;
        return $this;
    }

    /**
     * Gets as adresseVoie
     *
     * @return string
     */
    public function getAdresseVoie()
    {
        return $this->adresseVoie;
    }

    /**
     * Sets a new adresseVoie
     *
     * @param string $adresseVoie
     * @return self
     */
    public function setAdresseVoie($adresseVoie)
    {
        $this->adresseVoie = $adresseVoie;
        return $this;
    }

    /**
     * Gets as adresseComplement
     *
     * @return string
     */
    public function getAdresseComplement()
    {
        return $this->adresseComplement;
    }

    /**
     * Sets a new adresseComplement
     *
     * @param string $adresseComplement
     * @return self
     */
    public function setAdresseComplement($adresseComplement)
    {
        $this->adresseComplement = $adresseComplement;
        return $this;
    }

    /**
     * Gets as adresseHameau
     *
     * @return string
     */
    public function getAdresseHameau()
    {
        return $this->adresseHameau;
    }

    /**
     * Sets a new adresseHameau
     *
     * @param string $adresseHameau
     * @return self
     */
    public function setAdresseHameau($adresseHameau)
    {
        $this->adresseHameau = $adresseHameau;
        return $this;
    }

    /**
     * Gets as adresseCodePostal
     *
     * @return string
     */
    public function getAdresseCodePostal()
    {
        return $this->adresseCodePostal;
    }

    /**
     * Sets a new adresseCodePostal
     *
     * @param string $adresseCodePostal
     * @return self
     */
    public function setAdresseCodePostal($adresseCodePostal)
    {
        $this->adresseCodePostal = $adresseCodePostal;
        return $this;
    }

    /**
     * Gets as adresseVille
     *
     * @return string
     */
    public function getAdresseVille()
    {
        return $this->adresseVille;
    }

    /**
     * Sets a new adresseVille
     *
     * @param string $adresseVille
     * @return self
     */
    public function setAdresseVille($adresseVille)
    {
        $this->adresseVille = $adresseVille;
        return $this;
    }

    /**
     * Gets as adresseCodeDivisionTerritoriale
     *
     * @return string
     */
    public function getAdresseCodeDivisionTerritoriale()
    {
        return $this->adresseCodeDivisionTerritoriale;
    }

    /**
     * Sets a new adresseCodeDivisionTerritoriale
     *
     * @param string $adresseCodeDivisionTerritoriale
     * @return self
     */
    public function setAdresseCodeDivisionTerritoriale($adresseCodeDivisionTerritoriale)
    {
        $this->adresseCodeDivisionTerritoriale = $adresseCodeDivisionTerritoriale;
        return $this;
    }

    /**
     * Gets as adresseDivisionTerritoriale
     *
     * @return string
     */
    public function getAdresseDivisionTerritoriale()
    {
        return $this->adresseDivisionTerritoriale;
    }

    /**
     * Sets a new adresseDivisionTerritoriale
     *
     * @param string $adresseDivisionTerritoriale
     * @return self
     */
    public function setAdresseDivisionTerritoriale($adresseDivisionTerritoriale)
    {
        $this->adresseDivisionTerritoriale = $adresseDivisionTerritoriale;
        return $this;
    }

    /**
     * Gets as adresseEtrangere1
     *
     * @return string
     */
    public function getAdresseEtrangere1()
    {
        return $this->adresseEtrangere1;
    }

    /**
     * Sets a new adresseEtrangere1
     *
     * @param string $adresseEtrangere1
     * @return self
     */
    public function setAdresseEtrangere1($adresseEtrangere1)
    {
        $this->adresseEtrangere1 = $adresseEtrangere1;
        return $this;
    }

    /**
     * Gets as adresseEtrangere2
     *
     * @return string
     */
    public function getAdresseEtrangere2()
    {
        return $this->adresseEtrangere2;
    }

    /**
     * Sets a new adresseEtrangere2
     *
     * @param string $adresseEtrangere2
     * @return self
     */
    public function setAdresseEtrangere2($adresseEtrangere2)
    {
        $this->adresseEtrangere2 = $adresseEtrangere2;
        return $this;
    }

    /**
     * Gets as adresseEtrangere3
     *
     * @return string
     */
    public function getAdresseEtrangere3()
    {
        return $this->adresseEtrangere3;
    }

    /**
     * Sets a new adresseEtrangere3
     *
     * @param string $adresseEtrangere3
     * @return self
     */
    public function setAdresseEtrangere3($adresseEtrangere3)
    {
        $this->adresseEtrangere3 = $adresseEtrangere3;
        return $this;
    }

    /**
     * Gets as adresseEtrangere4
     *
     * @return string
     */
    public function getAdresseEtrangere4()
    {
        return $this->adresseEtrangere4;
    }

    /**
     * Sets a new adresseEtrangere4
     *
     * @param string $adresseEtrangere4
     * @return self
     */
    public function setAdresseEtrangere4($adresseEtrangere4)
    {
        $this->adresseEtrangere4 = $adresseEtrangere4;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as texteLibre1
     *
     * @return string
     */
    public function getTexteLibre1()
    {
        return $this->texteLibre1;
    }

    /**
     * Sets a new texteLibre1
     *
     * @param string $texteLibre1
     * @return self
     */
    public function setTexteLibre1($texteLibre1)
    {
        $this->texteLibre1 = $texteLibre1;
        return $this;
    }

    /**
     * Gets as texteLibre2
     *
     * @return string
     */
    public function getTexteLibre2()
    {
        return $this->texteLibre2;
    }

    /**
     * Sets a new texteLibre2
     *
     * @param string $texteLibre2
     * @return self
     */
    public function setTexteLibre2($texteLibre2)
    {
        $this->texteLibre2 = $texteLibre2;
        return $this;
    }

    /**
     * Gets as texteLibre3
     *
     * @return string
     */
    public function getTexteLibre3()
    {
        return $this->texteLibre3;
    }

    /**
     * Sets a new texteLibre3
     *
     * @param string $texteLibre3
     * @return self
     */
    public function setTexteLibre3($texteLibre3)
    {
        $this->texteLibre3 = $texteLibre3;
        return $this;
    }

    /**
     * Gets as texteLibre4
     *
     * @return string
     */
    public function getTexteLibre4()
    {
        return $this->texteLibre4;
    }

    /**
     * Sets a new texteLibre4
     *
     * @param string $texteLibre4
     * @return self
     */
    public function setTexteLibre4($texteLibre4)
    {
        $this->texteLibre4 = $texteLibre4;
        return $this;
    }

    /**
     * Gets as texteLibre5
     *
     * @return string
     */
    public function getTexteLibre5()
    {
        return $this->texteLibre5;
    }

    /**
     * Sets a new texteLibre5
     *
     * @param string $texteLibre5
     * @return self
     */
    public function setTexteLibre5($texteLibre5)
    {
        $this->texteLibre5 = $texteLibre5;
        return $this;
    }

    /**
     * Gets as iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Sets a new iban
     *
     * @param string $iban
     * @return self
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Gets as bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets a new bic
     *
     * @param string $bic
     * @return self
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Gets as titulaireDesignation
     *
     * @return string
     */
    public function getTitulaireDesignation()
    {
        return $this->titulaireDesignation;
    }

    /**
     * Sets a new titulaireDesignation
     *
     * @param string $titulaireDesignation
     * @return self
     */
    public function setTitulaireDesignation($titulaireDesignation)
    {
        $this->titulaireDesignation = $titulaireDesignation;
        return $this;
    }

    /**
     * Gets as titulaireDesignationSuite
     *
     * @return string
     */
    public function getTitulaireDesignationSuite()
    {
        return $this->titulaireDesignationSuite;
    }

    /**
     * Sets a new titulaireDesignationSuite
     *
     * @param string $titulaireDesignationSuite
     * @return self
     */
    public function setTitulaireDesignationSuite($titulaireDesignationSuite)
    {
        $this->titulaireDesignationSuite = $titulaireDesignationSuite;
        return $this;
    }

    /**
     * Adds as occurrence
     *
     * @return self
     * @param \InterInvest\Aspone2Bundle\ClassXml\Ir\OccurrenceType $occurrence
     */
    public function addToOccurrence(\InterInvest\Aspone2Bundle\ClassXml\Ir\OccurrenceType $occurrence)
    {
        $this->occurrence[] = $occurrence;
        return $this;
    }

    /**
     * isset occurrence
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOccurrence($index)
    {
        return isset($this->occurrence[$index]);
    }

    /**
     * unset occurrence
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOccurrence($index)
    {
        unset($this->occurrence[$index]);
    }

    /**
     * Gets as occurrence
     *
     * @return \InterInvest\Aspone2Bundle\ClassXml\Ir\OccurrenceType[]
     */
    public function getOccurrence()
    {
        return $this->occurrence;
    }

    /**
     * Sets a new occurrence
     *
     * @param \InterInvest\Aspone2Bundle\ClassXml\Ir\OccurrenceType[] $occurrence
     * @return self
     */
    public function setOccurrence(array $occurrence)
    {
        $this->occurrence = $occurrence;
        return $this;
    }


}

