<?php

/**
 * SOLID
 * 
 * Single reponsibility principle
 * Open close priciple
 * Liskov subsistiution priciple
 * Dependecy inversion
 */

abstract class Kind
{
    protected string $name;
    protected string $surname;
    protected DateTimeInterface $birthday;

    public function __construct(string $name, ?string $birthday = null)
    {
        $this->name = $name;
        if ($birthday) {
            $this->birthday = new DateTimeImmutable($birthday);
        }
    }

    public function years(): ?int
    {
        if (!isset($this->birthday)) {
            return null;
        }

        $birthday = (int) $this->birthday->format('Y');
        return (int) (date('Y') - $birthday);
    }

    public function walk(): void
    {
        if (isset($this->name)) echo $this->name . ' you are walking';
        else echo "You are walking";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSurname(string $name): void
    {
        $this->name = $name;
    }

    private function getName(): string
    {
        return ucfirst($this->name);
    }

    public function getSurname(): string
    {
        return $this->surname ?? '';
    }

    public function getFullName(): string
    {
        return $this->getName() . ' ' . $this->getSurname();
    }
}

class Human extends Kind
{
    public function __construct(string $name, string $surname)
    {
        parent::__construct($name);
        $this->surname = $surname;
    }

    public function setName(string $name, string $who = 'human'): void
    {
        $this->name = ucfirst($name . ' ' . $who);
    }

    public function walkAndSayYourName(string $name)
    {
        $this->setName($name);
        $this->walk();
    }
}

class Dog extends Kind
{
    public function years(): ?int
    {
        $years = parent::years();

        if ($years === null) {
            return null;
        }

        return $years * 7;
    }
}

$date = new DateTimeImmutable("2023-01-16");
$one_year = new DateInterval('P1Y');
// var_dump($date->add($one_year), $date);

// var_dump($date->format(DateTimeInterface::RFC850));
// echo date(DateTimeInterface::RFC850);

$dog = new Dog("Pluto", "2010-01-16");
var_dump($dog->years());

// $human->setName("Example");
// echo $human->getFullName();

// $human->walk();
// var_dump($human instanceof Dog);
// var_dump($human instanceof Kind);
// var_dump($human instanceof Human);
