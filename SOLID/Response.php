<?php

/*
 * A class should have only single responsibility only one
 * potential change in the software's specification should be able
 * to affect the Specification of the class
 */
$autoload = ['DatabaseInterface', 'ResponseTypeInterface', 'HTML', 'JSON', 'Mysql', 'Postgress', 'XML'];
foreach ($autoload as $load) {
    require_once $load . '.php';
}

class Response
{

    /**
     * @var ResponseTypeInterface
     */
    private $responseTypeInterface;
    /**
     * @var DatabaseInterface
     */
    private $databaseInterface;

    public function __construct(ResponseTypeInterface $responseTypeInterface, DatabaseInterface $databaseInterface)
    {

        $this->responseTypeInterface = $responseTypeInterface;
        $this->databaseInterface = $databaseInterface;
    }

    public function send()
    {
        $data = $this->databaseInterface->get();
        return $this->responseTypeInterface->send($data);
    }
}

$response = new Response(new HTML(), new Postgress);
echo $response->send();
