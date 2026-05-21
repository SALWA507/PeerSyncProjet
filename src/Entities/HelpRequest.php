<?php

declare(strict_types=1);

require_once __DIR__ . '/../Enums/Status.php';

class HelpRequest
{
    private ?int $id;

    private string $title;

    private string $description;

    private string $technology;

    private Status $status;

    private int $studentId;

    private ?int $tutorId;

    public function __construct(
        ?int $id,
        string $title,
        string $description,
        string $technology,
        int $studentId,
        ?int $tutorId = null
    )
    {

        $this->id = $id;

        $this->title = $title;

        $this->description = $description;

        $this->technology = $technology;

        $this->studentId = $studentId;

        $this->tutorId = $tutorId;

        $this->status = Status::PENDING;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTechnology(): string
    {
        return $this->technology;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }
}