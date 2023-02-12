<?php

namespace App\Test\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private UserRepository $repository;
    private string $path = '/user/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(User::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('User index');

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
            'user[email]' => 'Testing',
            'user[roles]' => 'Testing',
            'user[password]' => 'Testing',
            'user[nom]' => 'Testing',
            'user[prenom]' => 'Testing',
            'user[date_naissance]' => 'Testing',
            'user[adresse]' => 'Testing',
            'user[photo]' => 'Testing',
            'user[telephone]' => 'Testing',
            'user[dossier]' => 'Testing',
            'user[disponible_debut]' => 'Testing',
            'user[disponible_fin]' => 'Testing',
            'user[service]' => 'Testing',
        ]);

        self::assertResponseRedirects('/user/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new User();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setDate_naissance('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setPhoto('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setDossier('My Title');
        $fixture->setDisponible_debut('My Title');
        $fixture->setDisponible_fin('My Title');
        $fixture->setService('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('User');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new User();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setDate_naissance('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setPhoto('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setDossier('My Title');
        $fixture->setDisponible_debut('My Title');
        $fixture->setDisponible_fin('My Title');
        $fixture->setService('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'user[email]' => 'Something New',
            'user[roles]' => 'Something New',
            'user[password]' => 'Something New',
            'user[nom]' => 'Something New',
            'user[prenom]' => 'Something New',
            'user[date_naissance]' => 'Something New',
            'user[adresse]' => 'Something New',
            'user[photo]' => 'Something New',
            'user[telephone]' => 'Something New',
            'user[dossier]' => 'Something New',
            'user[disponible_debut]' => 'Something New',
            'user[disponible_fin]' => 'Something New',
            'user[service]' => 'Something New',
        ]);

        self::assertResponseRedirects('/user/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getRoles());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getDate_naissance());
        self::assertSame('Something New', $fixture[0]->getAdresse());
        self::assertSame('Something New', $fixture[0]->getPhoto());
        self::assertSame('Something New', $fixture[0]->getTelephone());
        self::assertSame('Something New', $fixture[0]->getDossier());
        self::assertSame('Something New', $fixture[0]->getDisponible_debut());
        self::assertSame('Something New', $fixture[0]->getDisponible_fin());
        self::assertSame('Something New', $fixture[0]->getService());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new User();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setDate_naissance('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setPhoto('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setDossier('My Title');
        $fixture->setDisponible_debut('My Title');
        $fixture->setDisponible_fin('My Title');
        $fixture->setService('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/user/');
    }
}
