<x-app-layout>
    <x-slot name="header">
        Zıt Kavram  Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('zit_kavramlar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="opposite_name">Kavram İsmi</label>
                    <input type="text" value="{{ old('opposite_name') }}" name="opposite_name" id="opposite_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="opposite_one_image_text">Kavram Resmi Metni 1 </label>
                    <input name="opposite_one_image_text" id="opposite_one_image_text" class="form-control"
                        value="{{ old('opposite_one_image_text') }}">
                </div>

                <div class="form-group">
                    <label for="opposite_two_image_text">Kavram Resmi Metni 2</label>
                    <input type="text" value="{{ old('opposite_two_image_text') }}" name="opposite_two_image_text"
                        id="opposite_two_image_text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Kavram Resmi 1</label>
                    <input type="file" class="form-control" required name="opposite_one_image">
                </div>

                <div class="form-group">
                    <label for="">Kavram Resmi 2</label>
                    <input type="file" class="form-control" required name="opposite_two_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
