<?php

namespace App\Test\Controller;

use App\Entity\Rdv;
use App\Repository\RdvRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RdvControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private RdvRepository $repository;
    private string $path = '/rdv/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Rdv::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Rdv index');

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
            'rdv[titre]' => 'Testing',
            'rdv[intervele_time]' => 'Testing',
            'rdv[date_rdv]' => 'Testing',
            'rdv[message]' => 'Testing',
            'rdv[patient]' => 'Testing',
            'rdv[medecin]' => 'Testing',
        ]);

        self::assertResponseRedirects('/rdv/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Rdv();
        $fixture->setTitre('My Title');
        $fixture->setIntervele_time('My Title');
        $fixture->setDate_rdv('My Title');
        $fixture->setMessage('My Title');
        $fixture->setPatient('My Title');
        $fixture->setMedecin('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Rdv');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Rdv();
        $fixture->setTitre('My Title');
        $fixture->setIntervele_time('My Title');
        $fixture->setDate_rdv('My Title');
        $fixture->setMessage('My Title');
        $fixture->setPatient('My Title');
        $fixture->setMedecin('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'rdv[titre]' => 'Something New',
            'rdv[intervele_time]' => 'Something New',
            'rdv[date_rdv]' => 'Something New',
            'rdv[message]' => 'Something New',
            'rdv[patient]' => 'Something New',
            'rdv[medecin]' => 'Something New',
        ]);

        self::assertResponseRedirects('/rdv/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitre());
        self::assertSame('Something New', $fixture[0]->getIntervele_time());
        self::assertSame('Something New', $fixture[0]->getDate_rdv());
        self::assertSame('Something New', $fixture[0]->getMessage());
        self::assertSame('Something New', $fixture[0]->getPatient());
        self::assertSame('Something New', $fixture[0]->getMedecin());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Rdv();
        $fixture->setTitre('My Title');
        $fixture->setIntervele_time('My Title');
        $fixture->setDate_rdv('My Title');
        $fixture->setMessage('My Title');
        $fixture->setPatient('My Title');
        $fixture->setMedecin('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/rdv/');
    }
}
