<?php

declare(strict_types=1); // Enable strict typing, which helps catch type-related errors early.

class CatApiService
{
    private string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = BASE_URL . IMAGES_SEARCH_BREED;
    }

    public function fetchRandomCat(): CatModel // Fetches a random cat with breed information from TheCatAPI
    {
        $apiKey = API_KEY; // Ensure API_KEY is defined in your config file
        $headers = [];
        if ($apiKey && $apiKey !== '') {
            $headers[] = 'x-api-key: ' . $apiKey;
        }

        // Inicializa cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (!empty($headers)) { // Only set headers if we have any
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($ch); // Execute the request

        if ($response === false) { // Check for cURL errors
            $error = curl_error($ch);
            curl_close($ch);
            throw new Exception("Error to connect with TheCatAPI: $error");
        }

        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($response, true);

        if (empty($data) || !is_array($data)) {
            throw new Exception("No cat data returned from API.");
        }

        return CatModel::createFromApiData($data[0]); // Create and return a CatModel instance
    }
}
