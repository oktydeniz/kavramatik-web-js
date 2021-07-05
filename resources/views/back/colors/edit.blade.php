<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>


    <div class="card">
        <div class="card-body">
            <form action="{{ route('renkler.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="color_name">Renk İsmi</label>
                    <input type="text" value="{{ $data->color_name }}" name="color_name" id="color_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="color_text">Renk Metni</label>
                    <input name="color_text" value="{{ $data->color_text }}" id="color_text" class="form-control"
                        rows="4">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz  
                    </div>
                    <label for="">İçeriğin Fotoğrafı</label>
   
                    <img style="width: 100px;height:100px;" src="data:image/jpg;base64,{{ base64_encode($data->color_image) }}" class="card-img-top"
                        alt="{{ $data->color_text }}"><br> 
                    <input type="file" class="form-control" name="color_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
