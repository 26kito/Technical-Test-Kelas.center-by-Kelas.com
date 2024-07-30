<div class="row">
    @foreach ($package as $row)
    <div class="col-md-4">
        <div class="card" style="background: {{ ($row->title == 'Pro') ? "#E0EFF5;" : ''}}">
            <div class="card-body">
                <div class="card-title d-flex">
                    <img src="{{ asset('tabler_bulb.png') }}" alt="">
                    <h5 class="ml-2">{{ $row->title }}</h5>
                </div>
                <h6 style="color: #8A8A8A">Kelebihan</h6>
                <ul class="list-group list-group-flush">
                    @foreach ($row->features as $item)
                    <div class="d-flex list-group-item" style="background: {{ ($row->title == 'Pro') ? "#E0EFF5;" : ''}}">
                        <img src="{{ asset('Group 15.svg') }}" style="width: 20px; height: 20px;">
                        <li>{{ $item->feature }}</li>
                    </div>
                    @endforeach
                </ul>
                <hr class="dashed">
                <div>
                    <p>{{ $row->price }}</p>
                    <h4>{{ $row->monthly_payment }}</h4>
                    <button type="button" class="btn btn-choose-package {{ ($row->title == 'Pro') ? "btn-choose-package-pro" : ''}} btn-block mt-3">Pilih Paket</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>