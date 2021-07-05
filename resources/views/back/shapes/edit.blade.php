<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('sekiller.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="shape_name">Şekil İsmi</label>
                    <input type="text" value="{{ $data->shape_name }}" name="shape_name" id="shape_name"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="shape_text">Şekil Metni</label>
                    <input name="shape_text" value="{{ $data->shape_text }}" id="shape_text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->shape_image) }}" class="card-img-top"
                        alt="{{ $data->shape_name }}"><br>
                    <input type="file" class="form-control" name="shape_image">
                </div>

                <div class="form-group">
                    <label for="shape_two_text">Şekil Metni</label>
                    <input name="shape_two_text" value="{{ $data->shape_two_text }}" id="shape_two_text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->shape_two_image) }}" class="card-img-top"
                        alt="{{ $data->shape_two_text }}"><br>
                    <input type="file" class="form-control" name="shape_two_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
