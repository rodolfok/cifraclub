<?php

namespace Konscia\CifraClub\Domain\Entities;

use Konscia\CifraClub\Domain\ValueObjects\Slug;

class Music
{
    /**
     * @var Slug
     */
    private $slug;

    /**
     * @var string
     */
    private $name;

    public function __construct(Slug $slug, string $name)
    {
        $this->name = $name;
        $this->slug = $slug;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): Slug
    {
        return $this->slug;
    }
}