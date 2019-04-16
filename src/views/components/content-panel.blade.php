<content-panel
    @if(isset($isCollapsible) && $isCollapsible) :is-collapsible="true" @else :is-collapsible="false" @endif
    @if(isset($isCollapsed) && $isCollapsed) :is-collapsed="true" @else :is-collapsed="false" @endif
>
    @if (isset($title)) <template slot="header">{{ $title }}</template> @endif
    {{ $slot }}
</content-panel>
