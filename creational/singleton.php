<?php
//final class Connection {
//
//    private static ?self $instance = null;
//    private static string $name;
//    public static function getInstance():self
//    {
//        if(self::$instance === null){
//            self::$instance = new self();
//        }
//        return self::$instance;
//
//    }
//
//    /**
//     * @return string
//     */
//    public static function getName(): string
//    {
//        return self::$name;
//    }
//
//    /**
//     * @param string $name
//     */
//    public static function setName(string $name): void
//    {
//        self::$name = $name;
//    }
//
//    public function __clone():void
//    {
//
//    }
//
//    public function __wakeup(): void
//    {
//        // TODO: Implement __wakeup() method.
//    }
//
//}
//
//$connection = Connection::getInstance();
//$connection::setName("Laravel");
//
//$connection2 = Connection::getInstance();
//var_dump($connection2::getName());
