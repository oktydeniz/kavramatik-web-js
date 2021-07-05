<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('miktarlar.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="quantitiy_name">Miktar İsmi</label>
                    <input type="text" value="{{ $data->quantitiy_name }}" name="quantitiy_name" id="quantitiy_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="quantitiy_text">Miktar Metni</label>
                    <input name="quantitiy_text" id="quantitiy_text" class="form-control" value="{{ $data->quantitiy_text }}">
                </div>

                <div class="form-group">
                   
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="">İçeriğin Fotoğrafı</label>
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->quantitiy_one_image) }}" class="card-img-top"
                        alt="{{ $data->shape_name }}"><br>
                    <input type="file" class="form-control" name="quantitiy_one_image">
                </div>

                <div class="form-group">
                    <label for="quantitiy_one_text">Miktar Metni 1 </label>
                    <input name="quantitiy_one_text" value="{{ $data->quantitiy_one_text }}" id="quantitiy_one_text" class="form-control">
                </div>
              
                <div class="form-group">
                    
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="">İçeriğin Fotoğrafı</label>
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->quantitiy_two_image) }}" class="card-img-top"
                        alt="{{ $data->shape_name }}"><br>
                    <input type="file" class="form-control" name="quantitiy_two_image">
                </div>

                <div class="form-group">
                    <label for="  quantitiy_two_text">Miktar Metni 2 </label>
                    <input name="  quantitiy_two_text" value="{{ $data->  quantitiy_two_text }}" id="  quantitiy_two_text" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
