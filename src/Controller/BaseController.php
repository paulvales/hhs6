<?php


namespace App\Controller;


use App\Entity\Checklist;
use App\Entity\Region;
use App\Entity\Setting;
use App\Entity\TagsFlat;
use App\Entity\TagsRepair;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{

    public $entity;

    /**
     * @var LoggerInterface
     */
    public $logger;

    /**
     * BaseController constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->entity = [
            'region'     => new Region,
            'checklist'  => new Checklist,
            'tagsRepair' => new TagsRepair,
            'tagsFlat'   => new TagsFlat,
            'setting'    => new Setting,
        ];
        $this->logger = $logger;
    }


    /**
     * @return ObjectManager
     */
    public function em(): ObjectManager
    {
        return $this->getDoctrine()->getManager();
    }

    protected function save($object): void
    {
        $this->em()->persist($object);
        $this->em()->flush();
    }

    protected function del($object): void
    {
        $this->em()->remove($object);
        $this->em()->flush();
    }

    protected function getRepo($class): ObjectRepository
    {
        return $this->em()->getRepository(get_class($class));
    }

    /**
     * @param $name
     *
     * @return object[]
     */
    protected function getItems($name): array
    {
        $data = $this->getRepo($this->entity[$name])->findAll();
        array_walk($data, [$this, 'addEntityName'], $name);

        return $data;
    }

    protected function base64ToJpeg($base64_string, $output_file)
    {
        $data = str_replace(" ", "+", $base64_string);
        $imgData1 = substr($data, 1 + strrpos($data, ','));
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . $output_file, base64_decode($imgData1));

        return $output_file;
    }

    /**
     * @param $item1
     * @param $key
     * @param $entityName
     */
    private function addEntityName(&$item1, $key, $entityName): void
    {
        $item1->entity = $entityName;
    }


}