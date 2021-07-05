<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('zit_kavramlar.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="opposite_name">Kavram İsmi</label>
                    <input type="text" value="{{ $data->opposite_name }}" name="opposite_name" id="opposite_name"
                        class="form-control">
                </div>
 
                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="opposite_one_image_text">Kavram Resmi Metni 1</label>
                    <input type="text" value="{{ $data->opposite_one_image_text }}" name="opposite_one_image_text"
                        id="opposite_one_image_text" class="form-control"><br>
                
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->opposite_one_image) }}"
                        class="card-img-top" alt="{{ $data->opposite_one_image_text }}"><br>
                    <input type="file" class="form-control" name="opposite_one_image">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="opposite_two_image_text">Kavram Resmi Metni 2</label>
                    <input type="text" value="{{ $data->opposite_two_image_text }}" name="opposite_two_image_text"
                        id="opposite_two_image_text" class="form-control"><br>
                
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->opposite_two_image) }}"
                        class="card-img-top" alt="{{ $data->opposite_two_image_text }}"><br>
                    <input type="file" class="form-control" name="opposite_two_image">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
