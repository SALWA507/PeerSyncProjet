<?php

declare(strict_types=1);

require_once __DIR__ . '/../../config/Database.php';

require_once __DIR__ . '/../Entities/HelpRequest.php';

class HelpRequestRepository
{

    public function save(
        HelpRequest $request
    ): void
    {

        $pdo = Database::connect();

        $sql = "INSERT INTO help_requests
        (
            title,
            description,
            technologie,
            status,
            student_id,
            tutor_id
        )

        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([

            $request->getTitle(),

            $request->getDescription(),

            $request->getTechnology(),

            $request->getStatus()->value,

            $request->getStudentId(),

            $request->getTutorId()

        ]);
    }

    public function updateAssign(
        HelpRequest $request
    ): void
    {

        $pdo = Database::connect();

        $sql = "UPDATE help_requests

                SET tutor_id = ?,
                    status = ?

                WHERE id = ?";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([

            $request->getTutorId(),

            $request->getStatus()->value,

            $request->getId()

        ]);
    }


    public function updateResolved(
        HelpRequest $request
    ): void
    {

        $pdo = Database::connect();

        $sql = "UPDATE help_requests

                SET status = ?,
                    thank_message = ?

                WHERE id = ?";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([

            $request->getStatus()->value,

            $request->getComment(),

            $request->getId()

        ]);
    }

}