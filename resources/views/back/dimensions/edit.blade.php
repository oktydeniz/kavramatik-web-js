<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('boyutlar.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="dimension_name">Boyut İsmi</label>
                    <input type="text" value="{{ $data->dimension_name }}" name="dimension_name" id="dimension_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="dimension_text">Boyut Metni</label>
                    <input name="dimension_text" id="dimension_text" class="form-control" value="{{ $data->dimension_text }}">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="dimension_one_text">İçeriğin Resmi (1)</label>
                    <input type="text" value="{{ $data->dimension_one_text }}" name="dimension_one_text"
                        id="dimension_one_text" class="form-control"><br>
                
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->dimension_one_image) }}"
                        class="card-img-top" alt="{{ $data->dimension_one_text }}"><br>
                    <input type="file" class="form-control" name="dimension_one_image">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="dimension_two_text">İçeriğin Resmi (2)</label>
                    <input type="text" value="{{ $data->dimension_two_text }}" name="dimension_two_text"
                        id="dimension_two_text" class="form-control"><br>
                
                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->dimension_two_image) }}"
                        class="card-img-top" alt="{{ $data->dimension_two_text }}"><br>
                    <input type="file" class="form-control" name="dimension_two_image">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
