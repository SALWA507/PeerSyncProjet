<?php

declare(strict_types=1);

require_once '../src/Entities/HelpRequest.php';

require_once '../src/Repositories/HelpRequestRepository.php';

require_once '../src/Enums/Status.php';

try {

    $studentId = 1;

    $tutorId = 2;

    $request = new HelpRequest(

        1,

        "Problem POO",

        "Description",

        "PHP",

        $studentId

    );

    $request->assignTo($tutorId);

    $repository = new HelpRequestRepository();

    $repository->updateAssign($request);

    echo "Ticket assigned successfully";

} catch (Exception $e) {

    echo $e->getMessage();
}