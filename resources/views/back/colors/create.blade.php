<x-app-layout>
    <x-slot name="header">
        Renk Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('renkler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="color_name">Renk İsmi</label>
                    <input type="text" value="{{ old('color_name') }}" name="color_name" id="color_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="color_text">Renk Metni</label>
                    <input name="color_text" value="{{ old('color_text') }}" id="color_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <input type="file" class="form-control" required name="color_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
