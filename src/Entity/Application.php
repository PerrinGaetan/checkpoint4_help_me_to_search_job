<?php

namespace App\Entity;

use App\Repository\ApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApplicationRepository::class)
 */
class Application
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contactName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeOfCompany;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $applicationDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasResponse = false;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $relaunchDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $interviewResume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    public function getTypeOfCompany(): ?string
    {
        return $this->typeOfCompany;
    }

    public function setTypeOfCompany(?string $typeOfCompany): self
    {
        $this->typeOfCompany = $typeOfCompany;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getApplicationDate(): ?\DateTimeInterface
    {
        return $this->applicationDate;
    }

    public function setApplicationDate(\DateTimeInterface $applicationDate): self
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    public function getHasResponse(): ?bool
    {
        return $this->hasResponse;
    }

    public function setHasResponse(bool $hasResponse): self
    {
        $this->hasResponse = $hasResponse;

        return $this;
    }

    public function getRelaunchDate(): ?\DateTimeInterface
    {
        return $this->relaunchDate;
    }

    public function setRelaunchDate(?\DateTimeInterface $relaunchDate): self
    {
        $this->relaunchDate = $relaunchDate;

        return $this;
    }

    public function getInterviewResume(): ?string
    {
        return $this->interviewResume;
    }

    public function setInterviewResume(?string $interviewResume): self
    {
        $this->interviewResume = $interviewResume;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
