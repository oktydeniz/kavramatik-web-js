<x-app-layout>
    <x-slot name="header">
        Yön Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('yonler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="direction_name">Yön İsmi</label>
                    <input type="text" value="{{ old('direction_name') }}" name="direction_name" id="direction_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="direction_text">Yön Metni</label>
                    <input name="direction_text" value="{{ old('direction_text') }}" id="direction_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Yön Fotoğrafı</label>
                    <input type="file" class="form-control" required name="direction_image">
                </div>

                <div class="form-group">
                    <label for="direction_two_text">Yön Metni 2 </label>
                    <input name="direction_two_text" value="{{ old('direction_two_text') }}" id="direction_two_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Yön Fotoğrafı 2 (Boş Olabilir)</label>
                    <input type="file" class="form-control"  name="direction_two">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
