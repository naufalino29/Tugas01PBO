<?php
class iphone {
    private string $color;
    private string $storage;

    public function __construct(string $color, string $storage){
        $this->color = $color;
        $this->storage = $storage;
    }

    public function getcolor():string {
        return $this->color;
    }

    public function getstorage (): string {
        return $this->storage;
    }
}