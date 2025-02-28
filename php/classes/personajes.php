<?php

class StarWarsCharacter {
    private string $name;
    private string $height;
    private string $mass;
    private string $hair_color;
    private string $skin_color;
    private string $eye_color;
    private string $birth_year;
    private string $gender;
    private string $homeworld;

    public function __construct(array $data) {
        $this->name = $data["name"] ?? "Nombre Desconocido";
        $this->height = $data["height"] ?? "Desconocido";
        $this->mass = $data["mass"] ?? "Desconocido";
        $this->hair_color = $data["hair_color"] ?? "Desconocido";
        $this->skin_color = $data["skin_color"] ?? "Desconocido";
        $this->eye_color = $data["eye_color"] ?? "Desconocido";
        $this->birth_year = $data["birth_year"] ?? "Desconocido";
        $this->gender = $data["gender"] ?? "Desconocido";
        $this->homeworld = $data["homeworld"] ?? "Desconocido";
    }

    public function getData(): array {
        return [
            "name" => $this->name,
            "height" => $this->height,
            "mass" => $this->mass,
            "hair_color" => $this->hair_color,
            "skin_color" => $this->skin_color,
            "eye_color" => $this->eye_color,
            "birth_year" => $this->birth_year,
            "gender" => $this->gender,
            "homeworld" => $this->homeworld
        ];
    }

    public function getName(): string {
        return $this->name;
    }

    public function getHeight(): string {
        return $this->height;
    }

    public function getMass(): string {
        return $this->mass;
    }

    public function getHairColor(): string {
        return $this->hair_color;
    }

    public function getSkinColor(): string {
        return $this->skin_color;
    }

    public function getEyeColor(): string {
        return $this->eye_color;
    }

    public function getBirthYear(): string {
        return $this->birth_year;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function getHomeworld(): string {
        return $this->homeworld;
    }
}

?>