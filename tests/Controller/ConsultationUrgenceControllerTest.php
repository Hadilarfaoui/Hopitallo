<?php

namespace App\Test\Controller;

use App\Entity\ConsultationUrgence;
use App\Repository\ConsultationUrgenceRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConsultationUrgenceControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ConsultationUrgenceRepository $repository;
    private string $path = '/consultation/urgence/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(ConsultationUrgence::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ConsultationUrgence index');

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
            'consultation_urgence[heure]' => 'Testing',
            'consultation_urgence[date_consultation]' => 'Testing',
            'consultation_urgence[diagnostic]' => 'Testing',
            'consultation_urgence[demandeUrgence]' => 'Testing',
        ]);

        self::assertResponseRedirects('/consultation/urgence/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new ConsultationUrgence();
        $fixture->setHeure('My Title');
        $fixture->setDate_consultation('My Title');
        $fixture->setDiagnostic('My Title');
        $fixture->setDemandeUrgence('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ConsultationUrgence');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new ConsultationUrgence();
        $fixture->setHeure('My Title');
        $fixture->setDate_consultation('My Title');
        $fixture->setDiagnostic('My Title');
        $fixture->setDemandeUrgence('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'consultation_urgence[heure]' => 'Something New',
            'consultation_urgence[date_consultation]' => 'Something New',
            'consultation_urgence[diagnostic]' => 'Something New',
            'consultation_urgence[demandeUrgence]' => 'Something New',
        ]);

        self::assertResponseRedirects('/consultation/urgence/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getHeure());
        self::assertSame('Something New', $fixture[0]->getDate_consultation());
        self::assertSame('Something New', $fixture[0]->getDiagnostic());
        self::assertSame('Something New', $fixture[0]->getDemandeUrgence());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new ConsultationUrgence();
        $fixture->setHeure('My Title');
        $fixture->setDate_consultation('My Title');
        $fixture->setDiagnostic('My Title');
        $fixture->setDemandeUrgence('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/consultation/urgence/');
    }
}
