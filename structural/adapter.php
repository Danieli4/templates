<?php

interface NativeWorker
{
    public function countSalary():int;
}

interface OutsourceWorker
{
    public function countSalaryBuHour($hour):int;
}

class NativeDeveloper implements NativeWorker
{
    public function countSalary():int
    {
        return 3000 * 20;
    }
}

class OutsourceDeveloper implements OutsourceWorker
{

    public function countSalaryBuHour($hour):int
    {
        return $hour * 500;
    }
}

class OutsourceWorkerAdapter implements NativeWorker
{
    private OutsourceWorker $outsourceWorker;

    /**
     * @param OutsourceWorker $outsourceWorker
     */
    public function __construct(OutsourceWorker $outsourceWorker)
    {
        $this->outsourceWorker = $outsourceWorker;
    }


    public function countSalary(): int
    {
        return $this->outsourceWorker->countSalaryBuHour(80);
    }
}

$nativeDeveloper = new NativeDeveloper();
$outsourceDeveloper = new OutsourceDeveloper();

$outsourceWorkerAdapter = new OutsourceWorkerAdapter($outsourceDeveloper);

var_dump($outsourceWorkerAdapter->countSalary());

