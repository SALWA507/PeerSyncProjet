<?php

declare(strict_types=1);

require_once '../src/Entities/HelpRequest.php';

require_once '../src/Repositories/HelpRequestRepository.php';

require_once '../src/Enums/Status.php';


$comment = "Merci beaucoup pour votre aide";

$request = new HelpRequest(

    1,

    "Problem POO",

    "Description",

    "PHP",

    1,

    2,

    $comment

);

$request->resolve();

$repository = new HelpRequestRepository();

$repository->updateResolved($request);

echo "Ticket resolved successfully";