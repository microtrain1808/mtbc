<?php


/**
 * A mockup of session data
 */
class Session
{
    /**
     * Returns the current user session
     * @return array Session data
     */
    public function read()
    {
        return ['id'=>'1234', 'name'=>'Jason Snider'];
    }
}

/**
 * Returns a greeting to a given user
 */
class Hello
{
    /**
     * An instance varaible to hold the name of
     * the use
     * @var String
     */
    protected $who;

    /**
     * A constructor method - Constructor inject with 
     * type hinting. Construcotr injection is a form
     * of dependency injection
     * @param Object $session - A user session
     */
    public function __construct(Session $session){
        $sessionData  = $session->read();
        $this->setWho($sessionData['name']);
    }



    /**
     * Returns a greeting to a target user
     * @param String $message
     * @return String
     */
    public function greet($message)
    {
        return "{$message} {$this->who}";
    }
}

class MyHello extends Hello
{
    /**
     * A setter method for Hello::who
     * @param String $who - The name of the given user
     */
    public function setWho($who)
    {
        $this->who = $who;
    }
}

//Instaniate the session class
$session = new Session();

//Instantiate the Hello class
$greeting = new MyHello($session);

$message = 'Good ' . 
    (date('H')<12?'Morning':date('H')<17?'Afternoon':'Evening');

echo $greeting->greet($message);