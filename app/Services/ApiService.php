<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ApiService
{
    private function getRequest($method, $path, $params, $headers = [])
    {
        try {
            $headers['Content-Type'] = 'application/json';
            if (authDetail('access_token') !== null) {
                $headers['Authorization'] = 'Bearer ' . authDetail('access_token');
            }
            $client = new Client(['verify' => false, 'curl' => [CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4]]);
            $apiPath = config('app.cms_api_path');
            $apiPath = $apiPath . '/' . $path;
            $response = $client->request($method, $apiPath, [
                'headers' => $headers,
                'query' => $params,
                'timeout' => 1,
            ]);

            $data = $response->getBody()->getContents();
            $decoded = json_decode($data, true);
            if ($decoded['success'] !== true) {
                $errorMessages = [];

                foreach ($decoded['errors'] as $key => $message) {
                    $errorMessages[$key] = $message;
                }

                throw ValidationException::withMessages($errorMessages);
            }

            return $decoded;
        } catch (\GuzzleHttp\Exception\ConnectException $ex) {
            Log::error('Connection Exception:', ['message' => $ex->getMessage()]);
        }
    }

    function get(string $path = null, array $params = [])
    {
        return $this->getRequest('GET', $path, $params);
    }

    function post(string $path = null, array $params = [])
    {
        return $this->getRequest('POST', $path, $params);
    }
}
