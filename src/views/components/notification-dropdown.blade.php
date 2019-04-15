<notification-dropdown id="{{ $id ?? '' }}" title="{{ $title ?? '' }}" icon="{{ $icon ?? '' }}"
    @if(isset($showMoreText)) show-more-text="{{ $showMoreText }}" @endif
    @if(isset($showMoreUrl)) show-more-url="{{ $showMoreUrl }}" @endif
    @if(isset($hasUnread) && $hasUnread === true) :has-unread="true" @else :has-unread="false" @endif
>
    {{ $slot }}
</notification-dropdown>
