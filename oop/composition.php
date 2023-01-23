<?php

/**
 * SOLID
 * 
 * Single reponsibility principle
 * Open close priciple
 * Liskov subsistiution priciple
 * Dependecy inversion
 */

interface YearsCalculatorContract
{
    public function years(DateTimeInterface $birthday): int;
}

class YearsCalculator implements YearsCalculatorContract
{
    public function years(DateTimeInterface $birthday): int
    {
        $birthyear = (int) $birthday->format('Y');
        return (int) (date('Y') - $birthyear);
    }
}

class DogYearsCalculator extends YearsCalculator implements YearsCalculatorContract
{
    public function years(DateTimeInterface $birthday): int
    {
        return parent::years($birthday) * 7;
    }
}

abstract class Kind
{
    protected YearsCalculatorContract $yearsCalculator;

    protected string $name;
    protected string $surname;
    protected DateTimeInterface $birthday;

    public function __construct(YearsCalculatorContract $yearsCalculator)
    {
        $this->yearsCalculator = $yearsCalculator;
    }

    public static function make(string $name, ?string $birthday = null): self
    {
        $yearCalc = new YearsCalculator();
        $instance = new self($yearCalc);
        $instance->setName($name);
        $instance->setBirthday(new DateTimeImmutable($birthday));

        return $instance;
    }

    public function setBirthday(DateTimeInterface $birthday)
    {
        $this->birthday = $birthday;
    }

    public function years(): ?int
    {
        if (!isset($this->birthday)) {
            return null;
        }

        return $this->yearsCalculator->years($this->birthday);
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
    public function __construct(string $name, string $surname, string $birthday)
    {
        parent::__construct(new YearsCalculator());
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = new DateTimeImmutable($birthday);
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
    public function __construct(string $name, string $surname, string $birthday)
    {
        parent::__construct(new DogYearsCalculator());
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = new DateTimeImmutable($birthday);
    }
}

// $date = new DateTimeImmutable("2023-01-16");
// $one_year = new DateInterval('P1Y');
// var_dump($date->add($one_year), $date);

// var_dump($date->format(DateTimeInterface::RFC850));
// echo date(DateTimeInterface::RFC850);

$human = new Dog("Pluto", "Surname", "2010-01-16");
var_dump($human->years());

// $human->setName("Example");
// echo $human->getFullName();

// $human->walk();
// var_dump($human instanceof Dog);
// var_dump($human instanceof Kind);
// var_dump($human instanceof Human);
