<?php

namespace App\Test\Controller;

use App\Entity\Hopital;
use App\Repository\HopitalRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HopitalControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private HopitalRepository $repository;
    private string $path = '/hopital/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Hopital::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Hopital index');

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
            'hopital[nomh]' => 'Testing',
            'hopital[adresseh]' => 'Testing',
            'hopital[numeroh]' => 'Testing',
            'hopital[typeh]' => 'Testing',
            'hopital[image]' => 'Testing',
        ]);

        self::assertResponseRedirects('/hopital/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Hopital();
        $fixture->setNomh('My Title');
        $fixture->setAdresseh('My Title');
        $fixture->setNumeroh('My Title');
        $fixture->setTypeh('My Title');
        $fixture->setImage('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Hopital');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Hopital();
        $fixture->setNomh('My Title');
        $fixture->setAdresseh('My Title');
        $fixture->setNumeroh('My Title');
        $fixture->setTypeh('My Title');
        $fixture->setImage('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'hopital[nomh]' => 'Something New',
            'hopital[adresseh]' => 'Something New',
            'hopital[numeroh]' => 'Something New',
            'hopital[typeh]' => 'Something New',
            'hopital[image]' => 'Something New',
        ]);

        self::assertResponseRedirects('/hopital/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNomh());
        self::assertSame('Something New', $fixture[0]->getAdresseh());
        self::assertSame('Something New', $fixture[0]->getNumeroh());
        self::assertSame('Something New', $fixture[0]->getTypeh());
        self::assertSame('Something New', $fixture[0]->getImage());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Hopital();
        $fixture->setNomh('My Title');
        $fixture->setAdresseh('My Title');
        $fixture->setNumeroh('My Title');
        $fixture->setTypeh('My Title');
        $fixture->setImage('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/hopital/');
    }
}
