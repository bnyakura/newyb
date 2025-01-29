<?php

namespace App\Models;

class PropertyModel{

    private $apiClient;

    public function __construct(ApiClient $apiClient){
        $this->apiClient = $apiClient;
    }


    public function getFeaturedProperties(){
        $featuredProperties = $this->apiClient->fetch(LIST_BY_REVIEW);
        return array_slice($featuredProperties, 0, 8);
    }


    public function getAllProperties() : array {
        return $this->apiClient->fetch(ALL_LISTINGS);
    }

    public function getProperty($propertyId) {
        $url = PROPERTY_DETAILS . "&pid=" . urlencode($propertyId);
        return $this->apiClient->fetch($url);
    }
    

    // public function getPropertyDetails($propertyId) {

    // }
    
}


