<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AdvertRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"advert:read"}},
 *     denormalizationContext={"groups"={"advert:write"}}
 * )
 * @ORM\Entity(repositoryClass=AdvertRepository::class)
 */
class Advert
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"advert:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=512)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $yearCirculation;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $km;

    /**
     * @ORM\Column(type="float")
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=16)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $conditionState;

    /**
     * @ORM\Column(type="date")
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=128)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $pic1;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $pic2;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $pic3;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $pic4;

    /**
     * @ORM\ManyToOne(targetEntity=Model::class, inversedBy="adverts")
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $model;

    /**
     * @ORM\ManyToOne(targetEntity=Garage::class, inversedBy="adverts")
     * @Groups({"advert:read"})
     * @Groups({"advert:write"})
     */
    private $garage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYearCirculation(): ?int
    {
        return $this->yearCirculation;
    }

    public function setYearCirculation(int $yearCirculation): self
    {
        $this->yearCirculation = $yearCirculation;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(int $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getConditionState(): ?string
    {
        return $this->conditionState;
    }

    public function setConditionState(string $conditionState): self
    {
        $this->conditionState = $conditionState;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getPic1(): ?string
    {
        return $this->pic1;
    }

    public function setPic1(string $pic1): self
    {
        $this->pic1 = $pic1;

        return $this;
    }

    public function getPic2(): ?string
    {
        return $this->pic2;
    }

    public function setPic2(?string $pic2): self
    {
        $this->pic2 = $pic2;

        return $this;
    }

    public function getPic3(): ?string
    {
        return $this->pic3;
    }

    public function setPic3(?string $pic3): self
    {
        $this->pic3 = $pic3;

        return $this;
    }

    public function getPic4(): ?string
    {
        return $this->pic4;
    }

    public function setPic4(?string $pic4): self
    {
        $this->pic4 = $pic4;

        return $this;
    }

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function setModel(?Model $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getGarage(): ?Garage
    {
        return $this->garage;
    }

    public function setGarage(?Garage $garage): self
    {
        $this->garage = $garage;

        return $this;
    }
}
