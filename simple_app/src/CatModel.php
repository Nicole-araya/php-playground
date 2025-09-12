<?php

declare(strict_types=1); // Enable strict typing, which helps catch type-related errors early.

class CatModel
{
    // This is for PHP 8.0 and later, which supports constructor property promotion.
    public function __construct(
        private string $image_url,
        private string $breed,
        private string $description,
        private string $temperament
    ) {}

    // Getters for the properties
    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function getBreed(): string
    {
        return $this->breed;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTemperament(): string
    {
        return $this->temperament;
    }

    // Method to create a Cat object from API data
    public static function createFromApiData(array $data): CatModel
    {
        $image_url = $data['url'] ?? '';
        $breed = $data['breeds'][0]['name'] ?? "Unknown"; // Default to "Unknown" if breed name is not available
        $description = $data['breeds'][0]['description'] ?? "";
        $temperament = $data['breeds'][0]['temperament'] ?? "";

        return new self($image_url, $breed, $description, $temperament);
    }
}