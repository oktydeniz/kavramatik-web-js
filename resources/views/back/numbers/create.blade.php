<x-app-layout>
    <x-slot name="header">
        Sayı Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sayilar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="number_name">Sayı İsmi</label>
                    <input type="text" value="{{ old('number_name') }}" name="number_name" id="number_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="number_one_text">Sayı 1 Metni</label>
                    <input name="number_one_text" id="number_one_text" class="form-control"
                        value="{{ old('number_one_text') }}">
                </div>

            
                <div class="form-group">
                    <label for="">Sayı 1 Resmi</label>
                    <input type="file" class="form-control" required name="number_one_image">
                </div>

          

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
