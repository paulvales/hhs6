<?php


namespace App\Controller\Admin;


use App\Controller\BaseController;
use App\Entity\Region;
use App\Entity\Setting;
use App\Repository\RegionRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Контроллер для управления объектами вида id-name
 * Class ItemController
 *
 * @package App\Controller\admin
 */
class ItemController extends BaseController
{


    /**
     * @Route("/updateItem", name="item_update")
     * @param Request $request
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function update(Request $request): ?JsonResponse
    {
        $data = $request->request->all();
        try {
            $this->validateData($data);

            $repo = $this->getRepo($this->entity[$data['entity']]);
            $id = $data['id'] ?? $data['param'];
            $item = $repo->find($id);
            if ($item) {
                $item = $this->saveItem($data, $item);

                return new JsonResponse($item);
            }

            return new JsonResponse(false);
        } catch (\Exception $e) {
            $this->logger->error(
                'Обновление item',
                [
                    'error' => $e->getMessage(),
                    'data'  => $data,
                ]
            );

            return new JsonResponse(false, 500);
        }
    }

    /**
     * @Route("/addItem", name="item_add")
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function add(Request $request): ?JsonResponse
    {
        $data = $request->request->all();
        try {
            $this->validateData($data);
            $item = $this->entity[$data['entity']];
            $item = $this->saveItem($data, $item);

            return new JsonResponse($item);
        } catch (\Exception $e) {
            $this->logger->error(
                'Добавление item',
                [
                    'error' => $e->getMessage(),
                    'data'  => $data,
                ]
            );

            return new JsonResponse(false, 500);
        }
    }

    /**
     * @Route("/deleteItem", name="item_delete")
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Request $request): ?JsonResponse
    {
        $data = $request->request->all();
        try {
            $this->validateData($data);

            $repo = $this->getRepo($this->entity[$data['entity']]);
            $item = $repo->find($data['id']);
            if ($item) {
                $this->del($item);

                return new JsonResponse(true);
            }

            return new JsonResponse(false);
        } catch (\Exception $e) {
            $this->logger->error(
                'Удаление item',
                [
                    'error' => $e->getMessage(),
                    'data'  => $data,
                ]
            );

            return new JsonResponse(false, 500);
        }
    }

    /**
     * Проверка обязательных полей
     *
     * @param $data
     *
     * @throws \Exception
     */
    private function validateData($data): void
    {
        if (!array_key_exists('entity', $data)) {
            throw new \Exception('Required entity param');
        }
    }

    /**
     * @param $data
     * @param $item
     *
     * @return mixed
     */
    private function saveItem($data, $item)
    {
        if (isset($data['name'])) {
            $item->setName($data['name']);
        }
        if (isset($data['value'])) {
            $item->setValue($data['value']);
        }
        if (isset($data['param'])) {
            $item->setParam($data['param']);
        }
        $this->save($item);

        return $item;
    }
}