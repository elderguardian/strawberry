<?php

class View {

    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function getFileName() : string {
        return $this->fileName;
    }

    private function render() : string {
        $file = $this->fileName;
        return file_get_contents("./views/$file.php");
    }

    public function __toString(): string
    {
        return $this->render();
    }

}