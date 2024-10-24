<?php
class Cat
{
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '.';
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getInfo()
    {
        echo 'Привет! Меня зовут: '. $this->name.' цвет:'.$this->color."<br>";
    }
}

$cat1 = new Cat('Снежок',' Белый');
$cat2 = new Cat('Барсик',' Рыжий');

$cat1->getInfo();
$cat2->getInfo();