<?php

namespace App\Models;

class ApiClient {
    public function fetch($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        
        if ($httpCode === 200) {

            // Handle XML response
            if (strpos($response, '<?xml') === 0) {
                try {
                    $xml = simplexml_load_string($response, 'SimpleXMLElement', LIBXML_NOCDATA);
                    if ($xml === false) {
                        return ['error' => 'Failed to parse XML response'];
                    }
                    // Convert XML to an array
                    return json_decode(json_encode($xml), true);
                } catch (\Exception $e) {
                    return ['error' => 'Error parsing XML: ' . $e->getMessage()];
                }
            }

            // Handle JSON response
            return json_decode($response, true);
        }

        throw new \Exception("Failed to fetch data from API. HTTP Code: $httpCode");
    }
}
