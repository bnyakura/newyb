<?php
namespace App\controllers;

use App\models\ApiClient;
use App\models\PropertyModel;

class PropertyController {
    private $apiClient;
    private $propertyModel;

    public function __construct() {
        $this->apiClient = new ApiClient();
        $this->propertyModel = new PropertyModel($this->apiClient);
    }

    // List home page properties
    public function homeView() {
        try {
            $allProperties = $this->propertyModel->getAllProperties();
            $recommendedProperties = $this->propertyModel->getFeaturedProperties();
            $error = null;
        } catch (\Exception $e) {
            $allProperties = [];
            $recommendedProperties = [];
            $error = $e->getMessage();
        }

        require __DIR__ . '/../views/home.php';
    }

    // List all properties
    public function allPropertiesView() {
        try {
            $allProperties = $this->propertyModel->getAllProperties();
            $error = null;
        } catch (\Exception $e) {
            $allProperties = [];
            $error = $e->getMessage();
        }

        require __DIR__ . '/../views/allProperties.php';
    }

    public function singlePropertyView($propertyId) {
        $apiClient = new ApiClient();
        $propertyModel = new PropertyModel($apiClient);
        try {
            $propertyDetails = $propertyModel->getProperty($propertyId);
        } catch (\Exception $e) {
            $propertyDetails = [];
            $error = $e->getMessage();
        }

        require __DIR__ . '/../views/singleProperty.php';
    }
}
