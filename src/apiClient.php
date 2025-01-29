<?php

class ApiClient
{
    private $username;
    private $password;

    // Constructor to initialize API credentials
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function get(string $url): array
    {
        // Initialize cURL session
        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_USERPWD, true );

        // Execute the request
        $response = curl_exec($ch);
        // Check for cURL errors
        if (curl_errno($ch)) {
            return ['error' => 'Request failed: ' . curl_error($ch)];
        }

        // Close cURL session
        curl_close($ch);

        // Check if the response is empty
        if (empty($response)) {
            return ['error' => ' Empty response from the server'];
        }

        // Handle XML response
        if (strpos($response, '<?xml') === 0) {
            try {
                $xml = simplexml_load_string($response, 'SimpleXMLElement', LIBXML_NOCDATA);
                if ($xml === false) {
                    return ['error' => 'Failed to parse XML response'];
                }
                // Convert XML to an array
                return json_decode(json_encode($xml), true);
            } catch (Exception $e) {
                return ['error' => 'Error parsing XML: ' . $e->getMessage()];
            }
        }

        // Fallback to JSON decoding
        $decodedResponse = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return ['error' => 'Unexpected response format'];
        }

        return $decodedResponse;
    }
}
