<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Service\Users\AddService;
use App\Service\Users\ListService;
use App\Service\Users\ReadService;
use App\Service\Users\DeleteService;
use App\Service\Users\UpdateService;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    public function __construct(
        protected AddService $addService,
        protected ListService $listService,
        protected ReadService $readService,
        protected DeleteService $deleteService,
        protected UpdateService $updateService
    ){}

    public function index(): JsonResource
    {
        return new UserResource($this->listService->handle());
    }

    public function store(): void
    {
        /* Здесь нужно сделать так
         *
         * $data = $request->validated()------> реквест берет из компонента UserRequest
         * $user = $this->addService->handle(array $data)-----------> Нужно указать для handle что передаем массив
         *
         * return new UserResource($user)----------> создать компонент UserResource, и понять стоит return как Response или как войд отправить
         * */

        new UserResource($this->addService->handle());
    }

    public function show($id):JsonResource
    {
        return new UserResource($this->readService->handle($id));
    }

    public function update($id): void
    {
        new UserResource($this->updateService->handle($id));
    }

    public function destroy($id): void
    {
        new UserResource($this->deleteService->handle($id));
    }
}
