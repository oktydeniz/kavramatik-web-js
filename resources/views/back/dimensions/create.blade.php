<x-app-layout>
    <x-slot name="header">
        Boyut Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('boyutlar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="dimension_name">Boyut İsmi</label>
                    <input type="text" value="{{ old('dimension_name') }}" name="dimension_name" id="dimension_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="dimension_text">Boyut Metni</label>
                    <input name="dimension_text" id="dimension_text" value="{{ old('dimension_text') }}" class="form-control"/>
                        
                </div>
                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı (Boyut 1)</label>
                    <input type="file" class="form-control" required name="dimension_one_image">
                </div>

                <div class="form-group">
                    <label for="dimension_one_text">Boyut 1 Metni</label>
                    <input type="text" value="{{ old('dimension_one_text') }}" name="dimension_one_text" id="dimension_one_text"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı (Boyut 2)</label>
                    <input type="file" class="form-control" required name="dimension_two_image">
                </div>

                <div class="form-group">
                    <label for="dimension_two_text">Boyut 2 Metni</label>
                    <input type="text" value="{{ old('dimension_two_text') }}" name="dimension_two_text" id="dimension_two_text"
                        class="form-control">
                </div>

             

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
