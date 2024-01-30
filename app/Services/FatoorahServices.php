<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class FatoorahServices
{
    private $base_url;
    private $headers;
    private $request_client;

    public function __construct(Client $request_client)
    {
        $this->request_client = $request_client;
        $this->base_url = env('fatoora_base_url', 'https://apitest.myfatoorah.com/');

        $this->headers = [
            "Content-Type" => 'application/json',
            "authorization" => 'Bearer ' . env("fatoora_token", "fatoora_token"),
        ];
    }

    public function buildRequest($url, $method, $data = [])
    {
        $request = new Request($method, $this->base_url . $url, $this->headers);
        if (!$data) {
            return false;
        }

        try {
            $response = $this->request_client->send($request, ['json' => $data]);

            \Log::info('Fatoorah API Full Response: ' . $response->getBody());
            
            if ($response->getStatusCode() != 200) {
                return false;
            }

            $response = json_decode($response->getBody(), true);
            return $response;
        } catch (\Exception $e) {
            \Log::error('Fatoorah API Error: ' . $e->getMessage());
            return false;
        }
    }

    public function sendPayment($data)
    {
        $response  = $this->buildRequest('v2/SendPayment', 'POST', $data);
        return $response;
    }

    public function getPaymentStatus($data)
    {
        $response  = $this->buildRequest('v2/getPaymentStatus', 'POST', $data);
        return $response;
    }

    public function callAPI($endpointURL, $apiKey, $postFields = [])
    {
        $response = $this->request_client->request('POST', $endpointURL, [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => $postFields,
        ]);

        return $response->getBody()->getContents();
    }
}
