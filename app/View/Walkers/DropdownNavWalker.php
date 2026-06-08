<?php

namespace App\View\Walkers;

class DropdownNavWalker extends \Walker_Nav_Menu
{
    /**
     * Stores the title of the parent item so we can label the submenu.
     */
    private string $currentParentTitle = '';

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $label = esc_attr($this->currentParentTitle);

        // x-show controlled by Alpine; role="menu" for ARIA semantics
        $output .= sprintf(
            '<ul
                x-cloak
                x-show="open"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="opacity-0 -translate-y-1"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-1"
                @click.outside="open = false"
                role="menu"
                aria-label="%s submenu"
                class="absolute left-0 top-full z-50 min-w-48 bg-white shadow-lg ring-1 ring-black/5 rounded-md py-1 mt-1">',
            $label
        );
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '</ul>';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $hasChildren = in_array('menu-item-has-children', $item->classes);

        $isActive = in_array('current-menu-item', $item->classes)
                 || in_array('current-menu-parent', $item->classes)
                 || in_array('current-menu-ancestor', $item->classes);

        $title  = apply_filters('the_title', $item->title, $item->ID);
        $url    = esc_url($item->url ?? '#');
        $target = $item->target ? 'target="' . esc_attr($item->target) . '"' : '';
        $rel    = $item->xfn   ? 'rel="'    . esc_attr($item->xfn)    . '"' : '';

        // Store parent title for submenu aria-label (used in start_lvl)
        if ($hasChildren) {
            $this->currentParentTitle = $title;
        }

        // ── Top-level item ───────────────────────────────────────────────
        if ($depth === 0) {
            if ($hasChildren) {
                // Single button handles both toggle and keyboard nav — no separate link
                $output .= '<li class="relative" x-data="{ open: false }" 
                    @keydown.escape.stop="open = false; $refs.toggle.focus()"
                    @mouseenter="open = true"
                    @mouseleave="open = false">';
            
                $buttonClasses = 'flex items-center gap-0.5 px-1 py-2 text-sm font-medium transition-colors rounded '
                    . 'focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 '
                    . ($isActive ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600');
            
                $output .= sprintf(
                    '<button
                        x-ref="toggle"
                        @click="open = !open"
                        :aria-expanded="open.toString()"
                        aria-haspopup="true"
                        class="%s">
                        %s
                        <svg
                            aria-hidden="true"
                            :class="open ? \'rotate-180\' : \'\'"
                            class="h-4 w-4 transition-transform duration-200"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                        </svg>
                    </button>',
                    esc_attr($buttonClasses),
                    $title
                );
            } else {
                $output .= '<li class="relative">';

                $linkClasses = 'block px-1 py-2 text-sm font-medium transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded '
                    . ($isActive ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600');

                $output .= sprintf(
                    '<a href="%s" class="%s !no-underline" %s %s %s>%s</a>',
                    $url,
                    esc_attr($linkClasses),
                    $target,
                    $rel,
                    $isActive ? 'aria-current="page"' : '',
                    $title
                );
            }

        // ── Dropdown item ────────────────────────────────────────────────
        } else {
            if ($hasChildren) {
                // Nested submenu: opens on hover/focus, flies right
                $output .= '<li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false; $refs.nestedToggle.focus()" role="none">';

                $linkClasses = 'flex w-full items-center justify-between px-4 py-2 text-sm transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-blue-500 '
                    . ($isActive ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600');

                $output .= sprintf(
                    '<button
                        x-ref="nestedToggle"
                        @click="open = !open"
                        :aria-expanded="open.toString()"
                        aria-haspopup="true"
                        role="menuitem"
                        class="%s">
                        %s
                        <svg aria-hidden="true"
                            class="h-4 w-4 shrink-0 -rotate-90"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                        </svg>
                    </button>',
                    esc_attr($linkClasses),
                    $title
                );
            } else {
                $output .= '<li role="none">';

                $linkClasses = 'flex w-full items-center px-4 py-2 text-sm transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-blue-500 '
                    . ($isActive ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600');

                $output .= sprintf(
                    '<a href="%s" class="%s !no-underline" role="menuitem" %s %s %s>%s</a>',
                    $url,
                    esc_attr($linkClasses),
                    $target,
                    $rel,
                    $isActive ? 'aria-current="page"' : '',
                    $title
                );
            }
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= '</li>';
    }
}
