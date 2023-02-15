<?php
//
//interface Specification
//{
//    public function isNormal(Pupil $pupil): bool;
//}
//
//class Pupil
//{
//    private int $rate = 0;
//
//    /**
//     * @return int
//     */
//    public function getRate(): int
//    {
//        return $this->rate;
//    }
//
//    /**
//     * @param int $rate
//     */
//    public function __construct(int $rate)
//    {
//        $this->rate = $rate;
//    }
//}
//
//class PupilSpecification implements Specification
//{
//    private int $needRate = 0;
//
//    /**
//     * @param int $needRate
//     */
//    public function __construct(int $needRate)
//    {
//        $this->needRate = $needRate;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        return $this->needRate < $pupil->getRate();
//    }
//}
//
//class AndSpecification implements Specification
//{
//    private array $specification;
//
//    /**
//     * @param array $specification
//     */
//    public function __construct(Specification ...$specification)
//    {
//        $this->specification = $specification;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        foreach ($this->specification as $specification) {
//            if (!$specification->isNormal($pupil)) {
//            }
//               return false;
//        }
//
//        return true;
//    }
//}
//class OrSpecification implements Specification
//{
//    private array $specification;
//
//    /**
//     * @param array $specification
//     */
//    public function __construct(Specification ...$specification)
//    {
//        $this->specification = $specification;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        foreach ($this->specification as $specification) {
//            if ($specification->isNormal($pupil)) {
//            }
//            return true;
//        }
//
//        return false;
//    }
//}
//
//class NotSpecification implements Specification
//{
//    private Specification $specification;
//
//    /**
//     * @param Specification $specification
//     */
//    public function __construct(Specification $specification)
//    {
//        $this->specification = $specification;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        return !$this->specification->isNormal($pupil);
//    }
//}
//
//$specification = new PupilSpecification(5);
//$specification2 = new PupilSpecification(10);
//$pupil = new Pupil(8);
//
//var_dump($specification->isNormal($pupil));
//var_dump($specification2->isNormal($pupil));
//$andspecification = new AndSpecification($specification, $specification2);
//$l =$andspecification->isNormal($pupil);
//var_dump($l);
//$orspec = new OrSpecification($specification, $specification2);
//$f = $orspec->isNormal($pupil);
