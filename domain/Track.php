<?php

class Track implements JsonSerializable {
    const TABLE_NAME = 'tracks';

    private $id;
    private $trackName;
    private $duration;
    private $authorId;
    private $genreId;
    private $trackLocation;

    public function __construct($id, $trackName, $duration, $authorId, $genreId, $trackLocation) {
        $this->id = $id;
        $this->trackName = $trackName;
        $this->duration = $duration;
        $this->authorId = $authorId;
        $this->genreId = $genreId;
        $this->trackLocation = $trackLocation;
    }

    public function getId() {
        return $this->id;
    }

    public function getTrackName() {
        return $this->trackName;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getAuthorId() {
        return $this->authorId;
    }

    public function getGenreId() {
        return $this->genreId;
    }

    public function getTrackLocation() {
        return $this->trackLocation;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'trackName' => $this->trackName,
            'duration' => $this->duration,
            'authorId' => $this->authorId,
            'genreId' => $this->genreId,
            'trackLocation' => $this->trackLocation
        ];
    }
}
