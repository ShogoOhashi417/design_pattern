<?php
class Type
{
    private $face;
    private $height;
    private $figure;
    private $character;
    private $hair;
    private $clothes;

    public function __construct($face, $height, $figure, $character, $hair, $clothes)
    {
        $this->face = $face;
        $this->height = $height;
        $this->figure = $figure;
        $this->character = $character;
        $this->hair = $hair;
        $this->clothes = $clothes;
    }

    public function summary() {
        return '私のタイプは' . PHP_EOL . 
        '顔 : ' . $this->face . PHP_EOL .
        '身長 : ' . $this->height . PHP_EOL .
        '体型 : ' . $this->figure . PHP_EOL .
        '性格 : ' . $this->character . PHP_EOL .
        '髪型 : ' . $this->hair . PHP_EOL .
        '服装 : ' . $this->clothes;
    }
}

class TypeBuilder {
    const DONT_CARE = '気にしない';

    private $face = self::DONT_CARE;
    private $height = self::DONT_CARE;
    private $figure = self::DONT_CARE;
    private $character = self::DONT_CARE;
    private $hair = self::DONT_CARE;
    private $clothes = self::DONT_CARE;

    public function addFace($face) {
        $this->face = $face;
        return $this;
    }

    public function addHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function addFigure($figure) {
        $this->figure = $figure;
        return $this;
    }

    public function addCharacter($character) {
        $this->character = $character;
        return $this;
    }

    public function addHair($hair) {
        $this->hair = $hair;
        return $this;
    }

    public function addClothes($clothes) {
        $this->clothes = $clothes;
        return $this;
    }

    public function build() {
        $result = new Type(
            $this->face,
            $this->height,
            $this->figure,
            $this->character,
            $this->hair,
            $this->clothes
        );

        $this->reset();
        return $result;
    }

    public function reset() {
        $this->face = self::DONT_CARE;
        $this->height = self::DONT_CARE;
        $this->figure = self::DONT_CARE;
        $this->character = self::DONT_CARE;
        $this->hair = self::DONT_CARE;
        $this->clothes = self::DONT_CARE;
    }
}

$type_builder = new TypeBuilder();
$type_builder->addFace('丸顔')
            ->addFigure('どちらかと言えば細い')
            ->addCharacter('努力家')
            ->addHair('センター分けハーフアップ')
            ->addClothes('ショートパンツにTシャツ');

$my_type = $type_builder->build();
print($my_type->summary());