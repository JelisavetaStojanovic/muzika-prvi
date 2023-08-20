<?php

class Genre implements JsonSerializable {
    const TABLE_NAME = 'genres';

    private $id;
    private $genreName;

    public function __construct($id, $genreName) {
        $this->id = $id;
        $this->genreName = $genreName;
    }

    public function getId() {
        return $this->id;
    }

    public function getGenreName() {
        return $this->genreName;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'genreName' => $this->genreName
        ];
    }
}
