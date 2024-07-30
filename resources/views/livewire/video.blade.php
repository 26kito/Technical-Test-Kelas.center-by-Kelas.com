<div>
    <div class="row">
        @foreach ($videoBtn as $row)
        <div class="col-md-3">
            <button wire:click="selectBtn('{{ $row }}')"
                class="btn benefit-btn {{ $btnSelected == $row ? 'benefit-btn-selected' : '' }}">{{ $row }}</button>
        </div>
        @endforeach
    </div>
    <div class="row mt-5">
        @foreach ($data as $item)
        <div class="card col-md-3" style="width: 200px">
            <img src="{{ asset('exampleVideo.png') }}" alt="">
            <h5>{{ $item['video-title'] }}</h5>
        </div>
        @endforeach
    </div>
</div>