<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('sayilar.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

              <div class="form-group">
                    <label for="number_name">Sayı İsmi</label>
                    <input type="text" value="{{ $data->number_name}}" name="number_name" id="number_name"
                        class="form-control">
                </div>


                <div class="form-group">
                    <label for="number_one_text">Sayı 1 Metni</label>
                    <input type="text" value="{{ $data->number_one_text }}" name="number_one_text"
                        id="number_one_text" class="form-control"><br>
                    <div class="alert alert-warning">
                        
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->number_one_image) }}"
                        class="card-img-top" alt="{{ $data->number_one_text }}"><br>
                    <input type="file" class="form-control" name="number_one_image">
                </div>
                
             
                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
