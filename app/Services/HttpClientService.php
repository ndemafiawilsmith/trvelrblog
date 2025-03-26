<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class HttpClientService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.api.base_url'); // Store base URL in config/services.php
    }

    /**
     * Send a GET request.
     */
    public function get($endpoint, $query = [], $headers = [])
    {
        return $this->makeRequest('get', $endpoint, $query, [], $headers);
    }

    /**
     * Send a POST request.
     */
    public function post($endpoint, $data = [], $headers = [])
    {
        return $this->makeRequest('post', $endpoint, [], $data, $headers);
    }

    /**
     * Handle the request.
     */
    private function makeRequest($method, $endpoint, $query, $data, $headers)
    {
        try {
            $response = Http::withHeaders($headers)
                ->withoutVerifying() // Disable SSL verification
                ->timeout(30) // Set timeout in seconds
                ->{$method}($this->baseUrl . $endpoint, ($method === 'get') ? $query : $data);

            return $response->json();
        } catch (RequestException $e) {
            return ['error' => 'Request failed', 'message' => $e->getMessage()];
        }
    }
}
