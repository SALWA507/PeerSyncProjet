<?php

declare(strict_types=1);

require_once '../src/Entities/HelpRequest.php';

require_once '../src/Repositories/HelpRequestRepository.php';

$title = $_POST['title'];

$description = $_POST['description'];

$technology = $_POST['technology'];

$studentId = 1;

$request = new HelpRequest(

    null,

    $title,

    $description,

    $technology,

    $studentId

);

$repository = new HelpRequestRepository();

$repository->save($request);

echo "Ticket created successfully";