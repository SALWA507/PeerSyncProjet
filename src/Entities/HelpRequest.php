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

    private ?string $comment;


    public function __construct(
        ?int $id,
        string $title,
        string $description,
        string $technology,
        int $studentId,
        ?int $tutorId = null,
        ?string $comment = null
    )
    {

        $this->id = $id;

        $this->title = $title;

        $this->description = $description;

        $this->technology = $technology;

        $this->studentId = $studentId;

        $this->tutorId = $tutorId;

        $this->comment = $comment;

        $this->status = Status::PENDING;
    }



    public function getId(): ?int
    {
        return $this->id;
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

    public function getStudentId(): int
    {
        return $this->studentId;
    }

    public function getTutorId(): ?int
    {
        return $this->tutorId;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }



    public function assignTo(int $tutorId): void
    {

        if ($this->studentId === $tutorId) {

            throw new Exception(
                "Vous ne pouvez pas prendre votre propre ticket"
            );
        }

        $this->tutorId = $tutorId;

        $this->status = Status::ASSIGNED;
    }



    public function resolve(): void
    {
        $this->status = Status::RESOLVED;
    }

}