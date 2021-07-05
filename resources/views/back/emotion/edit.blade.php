<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('duygular.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="emotion_name">Duygu İsmi</label>
                    <input type="text" value="{{ $data->emotion_name }}" name="emotion_name" id="emotion_name"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="emotion_text">Duygu Metni</label>
                    <input name="emotion_text" value="{{ $data->emotion_text }}" id="emotion_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->emotion_image) }}" class="card-img-top"
                        alt="{{ $data->emotion_name }}"><br>
                    <input type="file" class="form-control" name="emotion_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
