<?php
//abstract class WorkerPrototype
//{
//    protected string $name;
//    protected string $position;
//
//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param string $name
//     */
//    public function setName(string $name): void
//    {
//        $this->name = $name;
//    }
//
//}
//
//class Developer extends WorkerPrototype
//{
//    protected string $position = 'Developer';
//
//}
//
//$developer = new Developer();
//$developer->setName('Ivan');
//$developer2 = clone $developer;
////$developer2->setName('Boris');
//
//var_dump($developer2->getName());
//var_dump($developer->getName());