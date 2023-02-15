<!---->
<?php
//
//interface Mail
//{
//    public function render():string;
//}
//
//abstract class TypeMail
//{
//    private string $text;
//
//    /**
//     * @param string $text
//     */
//    public function __construct(string $text)
//    {
//        $this->text = $text;
//    }
//
//    /**
//     * @return string
//     */
//    public function getText(): string
//    {
//        return $this->text;
//    }
//}
//
//class BuisnessMail extends TypeMail implements Mail
//{
//
//    public function render(): string
//    {
//        return $this->getText() . 'from buisness Mail';
//    }
//}
//
//class JobMail extends TypeMail implements Mail
//{
//    public function render(): string
//    {
//        return $this->getText() . 'from job Mail';
//    }
//}
//
//class MailFactory
//{
//    private array $poll = [];
//    public function getMail($id, $typeMail):Mail
//    {
//        if (!isset($this->poll[$id])) {
//            $this->poll[$id] = $this->make($typeMail);
//        }
//        return $this->poll[$id];
//    }
//
//    private function make($typeMail)
//    {
//        if ($typeMail === 'business') {
//            return new BuisnessMail('Business text');
//        }
//        return new JobMail('Job text');
//    }
//}
//
//$mailFactory = new MailFactory();
//$mail = $mailFactory->getMail(10, 'business');
//var_dump($mail->render());