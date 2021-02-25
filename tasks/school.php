<?php
//Skolnieki
//Vards, Vecums( dzimsanas gads)
//Kura klase macas? 7-8gadi pirma klase utt.
//Iespeja mainit kura klase macas.
//Expected result: Janis 8 gadi, macas 1.klase.

//-------------------------------------------
//Skola
//Skola satur skolenus
//Iespeja paskaidrot cik skolenu macas x klase.
//Skola ka objekts

class School
{
    public $name;
    public $students;

    /**
     * School constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function getStudentsInClass(int $class)
    {
        return array_filter($this->students, function (Student $student) use ($class) {
            if ($student->getClass() === $class) {
                return true;
            }
            return false;
        });
    }

    public function changeClass()
    {
        $nameOfChange = readline('Ievadi studenta vardu, kuram nomainit klasi: ');
        foreach ($this->students as $student) {
            if ($student->getName() == $nameOfChange) {
                $student->class = readline('Ievadi jauno studenta klasi: ');
                echo $student->getName() . ' tagad macisies ' . $student->class . '.klase';
            }
        }


    }

}

class Student
{
    private string $name;
    private int $birthAge;
    private int $age;
    public int $class;

    /**
     * Student constructor.
     * @param $name
     * @param $birthAge
     * @param $age
     * @param $class
     */
    public function __construct($name, $birthAge)
    {
        $this->name = $name;
        $this->birthAge = $birthAge;
        $this->age = $this->createAge();
        $this->calculateClass();

    }

    private function createAge(): int
    {
        return (2021 - $this->birthAge);
    }

    private function calculateClass(): void
    {
        $class = 1;
        $chckAge = 7;
        for ($i = 7; $i <= 12; $i++) {
            if ($this->age == $chckAge) {
                $this->class = floor($class);
            }
            $chckAge++;
            $class += 0.5;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getClass(): int
    {
        return $this->class;
    }
}

$school = new School('ZVG');
$school->addStudent(new Student('Janis', '2014'));
$school->addStudent(new Student('Peteris', '2013'));
$school->addStudent(new Student('Anna', '2012'));
$school->addStudent(new Student('Justine', '2011'));
$school->addStudent(new Student('Valdis', '2010'));


//foreach ($school->getStudentsInClass(2) as $studentsInClass){
//    echo 'Skolnieks '.$studentsInClass->getName().' '.$studentsInClass->getAge().' gadi, macas '.$studentsInClass->getClass().'.klase '.$school->name.PHP_EOL;
//}
$school->changeClass();
echo PHP_EOL;
foreach ($school->getStudents() as $student) {
    echo 'Skolnieks ' . $student->getName() . ' ' . $student->getAge() . ' gadi, macas ' . $student->getClass() . '.klase ' . $school->name . PHP_EOL;
}