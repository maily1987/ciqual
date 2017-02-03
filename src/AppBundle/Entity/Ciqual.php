<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CiqualRepository")
 */
class Ciqual
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="ORIGGPC", type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $ORIGGPCD;

    /**
     * @ORM\Column(name="ORIGGPFR", type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(max = 150, maxMessage = "Your first name cannot be longer than {{ limit }} characters")
     */
    private $ORIGGPFR;

    /**
     * @ORM\Column(name="ORIGFDCD", type="integer")
     * @Assert\NotBlank()
     */
    private $ORIGFDCD;

    /**
     * @ORM\Column(name="ORIGFDNM", type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(max = 150, maxMessage = "Your first name cannot be longer than {{ limit }} characters")
     */
    private $ORIGFDNM;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $energieKj;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $energieKcal;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $energieFibreKj;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $energieFibreKcal;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $water;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $proteins;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $brutProteins;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $carbohydrates;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $lipids;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $sugars;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $starch;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $fibre;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $polyols;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $ashes;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $alcohol;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $organicAcids;

    /**
     * @ORM\Column(name="AG_saturated", type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $AGSaturated;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $cholesterol;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $salt;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $calcium;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $chloride;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $copper;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $iron;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $iodine;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $oRIGGPCD
     *
     * @return Ciqual
     */
    public function setORIGGPCD(string $oRIGGPCD): Ciqual
    {
        $this->ORIGGPCD = $oRIGGPCD;

        return $this;
    }

    /**
     * @return string
     */
    public function getORIGGPCD(): string
    {
        return $this->ORIGGPCD;
    }

    /**
     * @param string $oRIGGPFR
     *
     * @return Ciqual
     */
    public function setORIGGPFR(string $oRIGGPFR): Ciqual
    {
        $this->ORIGGPFR = $oRIGGPFR;

        return $this;
    }

    /**
     * @return string
     */
    public function getORIGGPFR(): string
    {
        return $this->ORIGGPFR;
    }

    /**
     * @param int $oRIGFDCD
     *
     * @return Ciqual
     */
    public function setORIGFDCD(int $oRIGFDCD): Ciqual
    {
        $this->ORIGFDCD = $oRIGFDCD;

        return $this;
    }

    /**
     * @return int
     */
    public function getORIGFDCD(): int
    {
        return $this->ORIGFDCD;
    }

    /**
     * @param string $oRIGFDNM
     *
     * @return Ciqual
     */
    public function setORIGFDNM(string $oRIGFDNM): Ciqual
    {
        $this->ORIGFDNM = $oRIGFDNM;

        return $this;
    }

    /**
     * @return string
     */
    public function getORIGFDNM(): string
    {
        return $this->ORIGFDNM;
    }

    /**
     * @param int $energieKj
     *
     * @return Ciqual
     */
    public function setEnergieKj(int $energieKj): Ciqual
    {
        $this->energieKj = $energieKj;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnergieKj(): int
    {
        return $this->energieKj;
    }

    /**
     * @param int $energieKcal
     *
     * @return Ciqual
     */
    public function setEnergieKcal(int $energieKcal): Ciqual
    {
        $this->energieKcal = $energieKcal;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnergieKcal(): int
    {
        return $this->energieKcal;
    }

    /**
     * @param int $energieFibreKj
     *
     * @return Ciqual
     */
    public function setEnergieFibreKj(int $energieFibreKj): Ciqual
    {
        $this->energieFibreKj = $energieFibreKj;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnergieFibreKj(): int
    {
        return $this->energieFibreKj;
    }

    /**
     * @param int $energieFibreKcal
     *
     * @return Ciqual
     */
    public function setEnergieFibreKcal(int $energieFibreKcal): Ciqual
    {
        $this->energieFibreKcal = $energieFibreKcal;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnergieFibreKcal(): int
    {
        return $this->energieFibreKcal;
    }

    /**
     * @param int $water
     *
     * @return Ciqual
     */
    public function setWater(int $water): Ciqual
    {
        $this->water = $water;

        return $this;
    }

    /**
     * @return int
     */
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * @param int $proteins
     *
     * @return Ciqual
     */
    public function setProteins(int $proteins): Ciqual
    {
        $this->proteins = $proteins;

        return $this;
    }

    /**
     * @return int
     */
    public function getProteins(): int
    {
        return $this->proteins;
    }

    /**
     * @param int $brutProteins
     *
     * @return Ciqual
     */
    public function setBrutProteins(int $brutProteins): Ciqual
    {
        $this->brutProteins = $brutProteins;

        return $this;
    }

    /**
     * @return int
     */
    public function getBrutProteins(): int
    {
        return $this->brutProteins;
    }

    /**
     * @param int $carbohydrates
     *
     * @return Ciqual
     */
    public function setCarbohydrates(int $carbohydrates): Ciqual
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    /**
     * @return int
     */
    public function getCarbohydrates(): int
    {
        return $this->carbohydrates;
    }

    /**
     * @param int $lipids
     *
     * @return Ciqual
     */
    public function setLipids(int $lipids): Ciqual
    {
        $this->lipids = $lipids;

        return $this;
    }

    /**
     * @return int
     */
    public function getLipids(): int
    {
        return $this->lipids;
    }

    /**
     * @param int $sugars
     *
     * @return Ciqual
     */
    public function setSugars(int $sugars): Ciqual
    {
        $this->sugars = $sugars;

        return $this;
    }

    /**
     * @return int
     */
    public function getSugars(): int
    {
        return $this->sugars;
    }

    /**
     * @param int $starch
     *
     * @return Ciqual
     */
    public function setStarch(int $starch): Ciqual
    {
        $this->starch = $starch;

        return $this;
    }

    /**
     * @return int
     */
    public function getStarch(): int
    {
        return $this->starch;
    }

    /**
     * @param int $fibre
     *
     * @return Ciqual
     */
    public function setFibre(int $fibre): Ciqual
    {
        $this->fibre = $fibre;

        return $this;
    }

    /**
     * @return int
     */
    public function getFibre(): int
    {
        return $this->fibre;
    }

    /**
     * @param int $polyols
     *
     * @return Ciqual
     */
    public function setPolyols(int $polyols): Ciqual
    {
        $this->polyols = $polyols;

        return $this;
    }

    /**
     * @return int
     */
    public function getPolyols(): string
    {
        return $this->polyols;
    }

    /**
     * @param int $ashes
     *
     * @return Ciqual
     */
    public function setAshes(int $ashes): Ciqual
    {
        $this->ashes = $ashes;

        return $this;
    }

    /**
     * @return int
     */
    public function getAshes(): int
    {
        return $this->ashes;
    }

    /**
     * @param int $alcohol
     *
     * @return Ciqual
     */
    public function setAlcohol(int $alcohol): Ciqual
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * @return int
     */
    public function getAlcohol(): int
    {
        return $this->alcohol;
    }

    /**
     * @param int $organicAcids
     *
     * @return Ciqual
     */
    public function setOrganicAcids(int $organicAcids): Ciqual
    {
        $this->organicAcids = $organicAcids;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrganicAcids(): int
    {
        return $this->organicAcids;
    }

    /**
     * @param int $aGSaturated
     *
     * @return Ciqual
     */
    public function setAGSaturated(int $aGSaturated): Ciqual
    {
        $this->AGSaturated = $aGSaturated;

        return $this;
    }

    /**
     * @return int
     */
    public function getAGSaturated(): int
    {
        return $this->AGSaturated;
    }

    /**
     * @param int $cholesterol
     *
     * @return Ciqual
     */
    public function setCholesterol(int $cholesterol): Ciqual
    {
        $this->cholesterol = $cholesterol;

        return $this;
    }

    /**
     * @return int
     */
    public function getCholesterol(): int
    {
        return $this->cholesterol;
    }

    /**
     * @param int $salt
     *
     * @return Ciqual
     */
    public function setSalt(int $salt): Ciqual
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * @return int
     */
    public function getSalt(): int
    {
        return $this->salt;
    }

    /**
     * @param int $calcium
     *
     * @return Ciqual
     */
    public function setCalcium(int $calcium): Ciqual
    {
        $this->calcium = $calcium;

        return $this;
    }

    /**
     * @return int
     */
    public function getCalcium(): int
    {
        return $this->calcium;
    }

    /**
     * @param int $chloride
     *
     * @return Ciqual
     */
    public function setChloride(int $chloride): Ciqual
    {
        $this->chloride = $chloride;

        return $this;
    }

    /**
     * @return int
     */
    public function getChloride(): int
    {
        return $this->chloride;
    }

    /**
     * @param int $copper
     *
     * @return Ciqual
     */
    public function setCopper(int $copper): Ciqual
    {
        $this->copper = $copper;

        return $this;
    }

    /**
     * @return int
     */
    public function getCopper(): int
    {
        return $this->copper;
    }

    /**
     * @param int $iron
     *
     * @return Ciqual
     */
    public function setIron(int $iron): Ciqual
    {
        $this->iron = $iron;

        return $this;
    }

    /**
     * @return int
     */
    public function getIron(): int
    {
        return $this->iron;
    }

    /**
     * @param int $iodine
     *
     * @return Ciqual
     */
    public function setIodine(int $iodine): Ciqual
    {
        $this->iodine = $iodine;

        return $this;
    }

    /**
     * @return int
     */
    public function getIodine(): int
    {
        return $this->iodine;
    }
}
