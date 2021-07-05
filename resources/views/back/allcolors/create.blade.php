<x-app-layout>
    <x-slot name="header">
        Renk Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('color.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="color_name">Renk İsmi</label>
                    <input type="text" value="{{ old('color_name') }}" name="color_name" id="color_name"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="">İçeriğin Fotoğrafı</label>
                    <input type="file" class="form-control" required name="color">
                </div>
                <div class="form-group">
                    <label for="color_tag">Renk Tag</label>
                    <input name="color_tag" value="{{ old('color_tag') }}" id="color_tag" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Karşılaştırma 1 </label>
                    <input type="file" class="form-control" required name="color_one">
                </div>
                <div class="form-group">
                    <label for="one_tag">Karşılaştırma 1 İsmi</label>
                    <input type="text" value="{{ old('one_tag') }}" name="one_tag" id="one_tag" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Karşılaştırma 2</label>
                    <input type="file" class="form-control" required name="color_two">
                </div>
                <div class="form-group">
                    <label for="two_tag">Karşılaştırma 2 İsmi</label>
                    <input type="text" value="{{ old('two_tag') }}" name="two_tag" id="two_tag" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
