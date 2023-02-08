<?php
//interface AbstractFactory
//{
//    public static function makeDeveloperWorker():DeveloperWorker;
//    public static function makeDesignWorker():DesignWorker;
//}
//
//class OutsourceWorkerFactory implements AbstractFactory
//{
//
//    public static function makeDesignWorker(): DesignWorker
//    {
//       return new OutsourceDesignWorker();
//    }
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new OutsourceDeveloperWorker();
//    }
//}
//
//class NativeWorkerFactory implements AbstractFactory
//{
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new NativeDeveloperWorker();
//    }
//
//    public static function makeDesignWorker(): DesignWorker
//    {
//        return new NativeDesignWorker();
//    }
//}
//
//interface Worker
//{
//    public function work();
//
//}
//
//interface DeveloperWorker extends Worker
//{
//
//}
//
//interface DesignWorker extends Worker
//{
//
//}
//
//class NativeDeveloperWorker implements DeveloperWorker
//{
//    public function work()
//    {
//        printf('im developing as native');
//    }
//}
//
//class OutsourceDeveloperWorker implements DeveloperWorker
//{
//    public function work()
//    {
//        printf('im developing as outsource');
//    }
//}
//
//class NativeDesignWorker implements DesignWorker
//{
//    public function work()
//    {
//        printf('im design as native');
//    }
//}
//
//class OutsourceDesignWorker implements DesignWorker
//{
//    public function work()
//    {
//        printf('im design as outsource');
//    }
//}
//
//$nativeDeveloper = NativeWorkerFactory::makeDeveloperWorker();
//$outsourceDeveloper = OutsourceWorkerFactory::makeDeveloperWorker();
//$nativeDesigner = NativeWorkerFactory::makeDesignWorker();
//$outsourceDesigner = OutsourceWorkerFactory::makeDesignWorker();
//
//$outsourceDesigner->work();