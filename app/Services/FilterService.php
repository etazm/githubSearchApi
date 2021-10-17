<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Validation\ValidationException;

class FilterService
{
    const DEFAULT_DATE = '2019-01-10';
    private $languages = ['php', 'javascript', 'python', 'java'];

    private $endPoint = 'https://api.github.com/search/repositories?sort=stars&order=desc';

    private $date;
    private $language;
    private $perPage;


    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getRepositoriesList()
    {
        $this->getFullUrl();
        $client = new Client();
        try {
            $response = $client->get($this->getFullUrl());
            return json_decode($response->getBody())->items;
        } catch (GuzzleException $exception) {
            throw ValidationException::withMessages(['filter' => 'Filtering Failed with error: ' . $exception->getMessage()]);
        }
    }

    private function getFullUrl(): string
    {
        $url = $this->endPoint . "&per_page=" . $this->perPage;
        return $url . $this->getUrlFilterString();
    }

    private function getUrlFilterString(): string
    {
        $query = '&q=created:>';
        if ($this->date) {
            $query .= $this->date;
        } else {
            $query .= self::DEFAULT_DATE;
        }

        if ($this->language) {
            $query .= urlencode(' ') . 'language:' . $this->language;
        }

        return $query;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): FilterService
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language): FilterService
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param mixed $perPage
     */
    public function setPerPage($perPage): FilterService
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }


}
