@php
    $record = $getRecord();
@endphp

<div class="flex justify-center">
    {!! QrCode::size(60)->generate(route('business-card.show', $record->id)) !!}
</div>
