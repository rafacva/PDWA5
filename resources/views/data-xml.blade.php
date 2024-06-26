<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
    <País>
        <tempMin>{{ $item->tempMin }}</tempMin>
        <tempMax>{{ $item->tempMax }}</tempMax>
        <umidMax>{{ $item->umidMax }}</umidMax>
        <precipitacao>{{ $item->precipitacao }}</precipitacao>
        <umidMin>{{ $item->umidMin }}</umidMin>
    </País>
    @endforeach
</data>
