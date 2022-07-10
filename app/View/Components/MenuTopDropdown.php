<?php

namespace App\View\Components;

use App\Helpers\HtmlTagAtrributeHelpers;
use App\Models\Page;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class MenuTopDropdown extends Component
{
    public ?array $links;
    public ?string $menuLabel;
    public string $menuRandomId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $menuItems, ?string $menuLabel = null)
    {
        $this->menuItems = $menuItems ?? [];
        $this->menuLabel = $menuLabel ?? null;
        $this->menuRandomId = \Str::uuid()->toString();
        $this->links = $this->getLinks();
    }

    /**
     * function getLinks
     *
     * @return ?array
     */
    protected function getLinks(): ?array
    {
        return array_map(
            fn ($data) => collect($data),
            $this->menuItems
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-top-dropdown', [
            'menuLabel' => $this->menuLabel,
            'menuRandomId' => $this->menuRandomId,
            'links' => $this->links,
        ]);
    }
}
