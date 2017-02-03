<?php

use AppBundle\Entity\Ciqual;
use Behat\Behat\Context\Context;
use Doctrine\Common\Persistence\ObjectManager;
use Gorghoa\ScenarioStateBehatExtension\Annotation\ScenarioStateArgument;
use Gorghoa\ScenarioStateBehatExtension\Context\ScenarioStateAwareContext;
use Gorghoa\ScenarioStateBehatExtension\Context\ScenarioStateAwareTrait;

class CiqualContext implements Context, ScenarioStateAwareContext
{
    use ScenarioStateAwareTrait,
        ContextTrait;

	/**
     * @var ObjectManager
     */
    public $manager;
    /**
     * @param RegistryInterface $doctrine
     */
    public function __construct(RegistryInterface $doctrine)
    {
        $this->manager = $doctrine->getManager();
    }
	
	/**
     * @param array $data
     *
     * @return Ciqual
     */
    public function createCiqual(array $data = [])
    {
        $ciqual = (new Ciqual())
            ->setORIGGPCD($data['ORIGGPCD'] ?? 0.1)
            ->setORIGGPFR($data['ORIGGPFR'] ?? 'test')
            ->setORIGFDCD($data['ORIGFDCD'] ?? 100)
            ->setORIGFDNM($data['ORIGFDNM'] ?? 'test')
            ->setEnergieKj($data['energieKj'] ?? 100)
            ->setEnergieKcal($data['energieKcal'] ?? 100)
            ->setEnergieFibreKj($data['energieFibreKj'] ?? 100)
            ->setEnergieFibreKcal($data['energieFibreKcal'] ?? 100)
            ->setWater($data['water'] ?? 0.1))
            ->setProteins($data['proteins'] ?? 0.1)
            ->setBrutProteins($data['BrutProteins'] ?? 0.1)
			->setCarbohydrates($data['Carbohydrates'] ?? 0.1)
			->setLipids($data['Lipids'] ?? 0.1)
			->setSugars($data['Sugars'] ?? 0.1)
			->setStarch($data['Starch'] ?? 0.1)
			->setFibre($data['Fibre'] ?? 0.1)
			->setPolyols($data['Polyol'] ?? 0.1)
			->setAshes($data['Ashes'] ?? 0.1)
			->setAlcohol($data['Alcohol'] ?? 0.1)
			->setOrganicAcids($data['OrganicAcids'] ?? 0.1)
			->setAGSaturated($data['AGSaturated'] ?? 0.1)
			->setCholesterol($data['Cholesterol'] ?? 0.1)
			->setSalt($data['Salt'] ?? 0.1)
			->setCalcium($data['Calcium'] ?? 0.1)
			->setChloride($data['Chloride'] ?? 0.1)
			->setCopper($data['Copper'] ?? 0.1)
			->setIron($data['Iron'] ?? 0.1)
			->setIodine($data['Iodine'] ?? 0.1);
		
        $this->manager->persist($ciqual);
        return $ciqual;
    }
	
    /**
     * @When I get a ciqual
     */
    public function iGetACiqual()
    {
        $ciqual = $this->createCiqual();
        $this->manager->flush();

        $this->apiContext->iSendAJsonLdRequestTo('GET', '/api/ciquals/'.$ciqual->getId());
    }

    /**
     * @Then I should get a ciqual
     */
    public function iShouldGetACiqual()
    {
        \PHPUnit_Framework_Assert::assertLessThan(300, $this->getMinkClient()->getResponse()->getStatusCode());
        $this->jsonContext->theJsonNodeShouldBeEqualToTheString('ORIGGPFR', 'test');
    }

}
