<?php

class Author implements JsonSerializable {

    const TABLE_NAME = 'authors';

    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
