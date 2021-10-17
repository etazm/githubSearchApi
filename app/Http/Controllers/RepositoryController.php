<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Resources\RepositoryResource;
use App\Services\FilterService;
use Illuminate\Http\JsonResponse;

class RepositoryController extends Controller
{
    /**
     * @var \App\Services\FilterService
     */
    private $filterService;

    public function __construct(FilterService $filterService)
    {
        $this->filterService = $filterService;
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function index(FilterRequest $request): JsonResponse
    {
        $repositories = $this->filterService->setDate($request->date)
            ->setLanguage($request->language)
            ->setPerPage($request->get('per_page', 10))
            ->getRepositoriesList();

        return response()->json(['result' => RepositoryResource::collection(collect($repositories))]);
    }
}
