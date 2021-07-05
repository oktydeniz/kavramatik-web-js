<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('duyular.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="sense_name">Duygu İsmi</label>
                    <input type="text" value="{{ $data->sense_name }}" name="sense_name" id="sense_name"
                        class="form-control">
                </div>
 
                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="sense_one_image_text">Duyu Resmi Metni 1</label>
                    <input type="text" value="{{ $data->sense_one_image_text }}" name="sense_one_image_text"
                        id="sense_one_image_text" class="form-control"><br>
                
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->sense_one_image) }}"
                        class="card-img-top" alt="{{ $data->sense_one_image_text }}"><br>
                    <input type="file" class="form-control" name="sense_one_image">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="sense_two_image_text">Duyu Resmi Metni 2</label>
                    <input type="text" value="{{ $data->sense_two_image_text }}" name="sense_two_image_text"
                        id="sense_two_image_text" class="form-control"><br>
                
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->sense_two_image) }}"
                        class="card-img-top" alt="{{ $data->sense_two_image_text }}"><br>
                    <input type="file" class="form-control" name="sense_two_image">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
