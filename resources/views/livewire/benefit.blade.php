<div>
    <div class="row">
        @foreach ($benefitBtn as $row)
        <div class="col-md-3">
            <button wire:click="selectBtn('{{ $row }}')" class="btn benefit-btn {{ $btnSelected == $row ? 'benefit-btn-selected' : '' }}">{{ $row }}</button>
        </div>
        @endforeach
    </div>

    <div class="container py-5">
        <div class="row" style="text-align: justify">
            <div class="col-md-6">
                <div class="benefit-header">
                    <h5>{{ $benefitContent['title'] }}</h5>
                    <p>{{ $benefitContent['info'] }}</p>
                </div>
                @foreach ($benefitContent['point'] as $item)
                <div class="benefit-content mt-5">
                    <div class="d-flex" style="background: #f6f6f6">
                        <img src="{{ asset('check_small.png') }}" alt="">
                        <p>{{ $item['title'] }}</p>
                    </div>
                    <p>{{ $item['content'] }}</p>
                </div>    
                @endforeach
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500" class="img-fluid" alt="Kelas Center">
            </div>
        </div>
    </div>
</div>