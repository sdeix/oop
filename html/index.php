<?php
class Cat
{
    private $name;
    

    public function __construct(string $name)
    {
        $this->name = $name;
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
}

$cat1 = new Cat('Снежок');
echo $cat1->getName();