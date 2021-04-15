<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GarageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"garage:read"}},
 *     denormalizationContext={"groups"={"garage:write"}}
 * )
 * @ORM\Entity(repositoryClass=GarageRepository::class)
 */
class Garage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"garage:read"})
     * @Groups({"advert:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
     * @Groups({"advert:read"})
     * @Groups({"user:read"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=256)
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=12)
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=64)
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=12)
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
     */
    private $telNumber;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="garages")
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
     * @Groups({"advert:read"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Advert::class, mappedBy="garage")
     * @Groups({"garage:read"})
     * @Groups({"garage:write"})
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

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

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

    public function getTelNumber(): ?string
    {
        return $this->telNumber;
    }

    public function setTelNumber(string $telNumber): self
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
            $advert->setGarage($this);
        }

        return $this;
    }

    public function removeAdvert(Advert $advert): self
    {
        if ($this->adverts->removeElement($advert)) {
            // set the owning side to null (unless already changed)
            if ($advert->getGarage() === $this) {
                $advert->setGarage(null);
            }
        }

        return $this;
    }
}
