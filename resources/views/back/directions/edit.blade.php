<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('yonler.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="direction_name">Yön İsmi</label>
                    <input type="text" value="{{ $data->direction_name }}" name="direction_name" id="direction_name"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="direction_text">Yön Metni</label>
                    <input name="direction_text" value="{{ $data->direction_text }}" id="direction_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->direction_image) }}" class="card-img-top"
                        alt="{{ $data->direcion_name }}"><br>
                    <input type="file" class="form-control" name="direction_image">
                </div>
                <div class="form-group">
                    <label for="direction_two_text">Yön Metni</label>
                    <input name="direction_two_text" value="{{ $data->direction_two_text }}" id="direction_two_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->direction_two) }}" class="card-img-top"
                        alt="{{ $data->direction_two_text }}"><br>
                    <input type="file" class="form-control" name="direction_two">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
