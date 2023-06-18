<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    private ?User $iduser = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'orders')]
    private Collection $idproduct;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateorder = null;

    #[ORM\Column(nullable: true)]
    private ?float $totalamount = null;

    #[ORM\OneToOne(mappedBy: 'idorder', cascade: ['persist', 'remove'])]
    private ?Review $review = null;

    public function __construct()
    {
        $this->idproduct = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getIdproduct(): Collection
    {
        return $this->idproduct;
    }

    public function addIdproduct(Product $idproduct): static
    {
        if (!$this->idproduct->contains($idproduct)) {
            $this->idproduct->add($idproduct);
        }

        return $this;
    }

    public function removeIdproduct(Product $idproduct): static
    {
        $this->idproduct->removeElement($idproduct);

        return $this;
    }

    public function getDateorder(): ?\DateTimeInterface
    {
        return $this->dateorder;
    }

    public function setDateorder(\DateTimeInterface $dateorder): static
    {
        $this->dateorder = $dateorder;

        return $this;
    }

    public function getTotalamount(): ?float
    {
        return $this->totalamount;
    }

    public function setTotalamount(?float $totalamount): static
    {
        $this->totalamount = $totalamount;

        return $this;
    }

    public function getReview(): ?Review
    {
        return $this->review;
    }

    public function setReview(?Review $review): static
    {
        // unset the owning side of the relation if necessary
        if ($review === null && $this->review !== null) {
            $this->review->setIdorder(null);
        }

        // set the owning side of the relation if necessary
        if ($review !== null && $review->getIdorder() !== $this) {
            $review->setIdorder($this);
        }

        $this->review = $review;

        return $this;
    }
}
