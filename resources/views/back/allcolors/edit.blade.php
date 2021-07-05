<x-app-layout>
    <x-slot name="header">
        Güncelle
    </x-slot>


    <div class="card">
        <div class="card-body">
            <form action="{{ route('color.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="color_name">Renk Türü</label>
                    <input type="text" value="{{ $data->color_name }}" name="color_name" id="color_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="color_tag">Renk İsmi</label>
                    <input name="color_tag" value="{{ $data->color_tag }}" id="color_tag" class="form-control"
                        rows="4">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="">İçeriğin Fotoğrafı</label>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->color) }}" class="card-img-top"
                        alt="{{ $data->color_tag }}"><br>
                    <input type="file" class="form-control" name="color">
                </div>


                ---------
                <div class="form-group">
                    <label for="one_tag">Karşılaştırma 1 Tag</label>
                    <input name="one_tag" value="{{ $data->one_tag }}" id="one_tag" class="form-control" rows="4">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="">İçeriğin Fotoğrafı</label>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->color_one) }}" class="card-img-top"
                        alt="{{ $data->one_tag }}"><br>
                    <input type="file" class="form-control" name="color_one">
                </div>
                ---------

                <div class="form-group">
                    <label for="two_tag">Karşılaştırma 2 Tag</label>
                    <input name="two_tag" value="{{ $data->two_tag }}" id="two_tag" class="form-control" rows="4">
                </div>

                <div class="form-group">
                    <div class="alert alert-warning">
                        Sadece Değiştirmek İstediğinizde Dosyaları Seçiniz
                    </div>
                    <label for="">İçeriğin Fotoğrafı</label>

                    <img style="width: 100px;height:100px;"
                        src="data:image/jpg;base64,{{ base64_encode($data->color_two) }}" class="card-img-top"
                        alt="{{ $data->two_tag }}"><br>
                    <input type="file" class="form-control" name="color_two">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
