<x-app-layout>
    <x-slot name="header">
        Şekil Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sekiller.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="shape_name">Şekil İsmi</label>
                    <input type="text" value="{{ old('shape_name') }}" name="shape_name" id="shape_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="shape_text">Şekil Metni</label>
                    <input name="shape_text" value="{{ old('shape_text') }}" id="shape_text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <input type="file" class="form-control" required name="shape_image">
                </div>

                <div class="form-group">
                    <label for="shape_two_text">Şekil İsmi 2 (Boş Olabilir)</label>
                    <input type="text" value="{{ old('shape_two_text') }}" name="shape_two_text" id="shape_two_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı 2</label>
                    <input type="file" class="form-control"  name="shape_two_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
