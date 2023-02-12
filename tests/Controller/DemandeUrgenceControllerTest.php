<?php

namespace App\Test\Controller;

use App\Entity\DemandeUrgence;
use App\Repository\DemandeUrgenceRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemandeUrgenceControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private DemandeUrgenceRepository $repository;
    private string $path = '/demande/urgence/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(DemandeUrgence::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('DemandeUrgence index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'demande_urgence[adresse_u]' => 'Testing',
            'demande_urgence[cas_urgence]' => 'Testing',
            'demande_urgence[date]' => 'Testing',
            'demande_urgence[hopital]' => 'Testing',
            'demande_urgence[patient]' => 'Testing',
            'demande_urgence[medecin]' => 'Testing',
        ]);

        self::assertResponseRedirects('/demande/urgence/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new DemandeUrgence();
        $fixture->setAdresse_u('My Title');
        $fixture->setCas_urgence('My Title');
        $fixture->setDate('My Title');
        $fixture->setHopital('My Title');
        $fixture->setPatient('My Title');
        $fixture->setMedecin('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('DemandeUrgence');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new DemandeUrgence();
        $fixture->setAdresse_u('My Title');
        $fixture->setCas_urgence('My Title');
        $fixture->setDate('My Title');
        $fixture->setHopital('My Title');
        $fixture->setPatient('My Title');
        $fixture->setMedecin('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'demande_urgence[adresse_u]' => 'Something New',
            'demande_urgence[cas_urgence]' => 'Something New',
            'demande_urgence[date]' => 'Something New',
            'demande_urgence[hopital]' => 'Something New',
            'demande_urgence[patient]' => 'Something New',
            'demande_urgence[medecin]' => 'Something New',
        ]);

        self::assertResponseRedirects('/demande/urgence/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getAdresse_u());
        self::assertSame('Something New', $fixture[0]->getCas_urgence());
        self::assertSame('Something New', $fixture[0]->getDate());
        self::assertSame('Something New', $fixture[0]->getHopital());
        self::assertSame('Something New', $fixture[0]->getPatient());
        self::assertSame('Something New', $fixture[0]->getMedecin());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new DemandeUrgence();
        $fixture->setAdresse_u('My Title');
        $fixture->setCas_urgence('My Title');
        $fixture->setDate('My Title');
        $fixture->setHopital('My Title');
        $fixture->setPatient('My Title');
        $fixture->setMedecin('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/demande/urgence/');
    }
}
