<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ModelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"model:read"}},
 *     denormalizationContext={"groups"={"model:write"}}
 * )
 * @ORM\Entity(repositoryClass=ModelRepository::class)
 */
class Model
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"model:read"})
     * @Groups({"advert:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     * @Groups({"model:write"})
     * @Groups({"model:read"})
     * @Groups({"advert:read"})
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"model:write"})
     * @Groups({"model:read"})
     * @Groups({"advert:read"})
     */
    private $motorPower;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"model:write"})
     * @Groups({"model:read"})
     * @Groups({"advert:read"})
     */
    private $gasTankCapacity;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     * @Groups({"model:write"})
     * @Groups({"model:read"})
     * @Groups({"advert:read"})
     */
    private $euroNorm;

    /**
     * @ORM\Column(type="string", length=6, nullable=true)
     * @Groups({"model:write"})
     * @Groups({"model:read"})
     * @Groups({"advert:read"})
     */
    private $axle;

    /**
     * @ORM\ManyToOne(targetEntity=Brand::class, inversedBy="models")
     * @Groups({"model:write"})
     * @Groups({"model:read"})
     * @Groups({"advert:read"})
     */
    private $brand;

    /**
     * @ORM\OneToMany(targetEntity=Advert::class, mappedBy="model")
     * @Groups({"model:read"})
     * @Groups({"model:write"})
     */
    private $adverts;

    public function __construct()
    {
        $this->adverts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMotorPower(): ?int
    {
        return $this->motorPower;
    }

    public function setMotorPower(?int $motorPower): self
    {
        $this->motorPower = $motorPower;

        return $this;
    }

    public function getGasTankCapacity(): ?int
    {
        return $this->gasTankCapacity;
    }

    public function setGasTankCapacity(?int $gasTankCapacity): self
    {
        $this->gasTankCapacity = $gasTankCapacity;

        return $this;
    }

    public function getEuroNorm(): ?string
    {
        return $this->euroNorm;
    }

    public function setEuroNorm(?string $euroNorm): self
    {
        $this->euroNorm = $euroNorm;

        return $this;
    }

    public function getAxle(): ?string
    {
        return $this->axle;
    }

    public function setAxle(?string $axle): self
    {
        $this->axle = $axle;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return Collection|Advert[]
     */
    public function getAdverts(): Collection
    {
        return $this->adverts;
    }

    public function addAdvert(Advert $advert): self
    {
        if (!$this->adverts->contains($advert)) {
            $this->adverts[] = $advert;
            $advert->setModel($this);
        }

        return $this;
    }

    public function removeAdvert(Advert $advert): self
    {
        if ($this->adverts->removeElement($advert)) {
            // set the owning side to null (unless already changed)
            if ($advert->getModel() === $this) {
                $advert->setModel(null);
            }
        }

        return $this;
    }
}
