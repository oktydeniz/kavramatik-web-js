<x-app-layout>
    <x-slot name="header">
        Duygu Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('duygular.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="emotion_name">Duygu İsmi</label>
                    <input type="text" value="{{ old('emotion_name') }}" name="emotion_name" id="emotion_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="emotion_text">Duygu Metni</label>
                    <input name="emotion_text" value="{{ old('emotion_text') }}" id="emotion_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <input type="file" class="form-control" required name="emotion_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
