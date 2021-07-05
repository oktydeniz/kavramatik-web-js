<x-app-layout>
    <x-slot name="header">
        Duyu  Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('duyular.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="sense_name">Duyu İsmi</label>
                    <input type="text" value="{{ old('sense_name') }}" name="sense_name" id="sense_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="sense_one_image_text">Duyu Resmi Metni 1 </label>
                    <input name="sense_one_image_text" id="sense_one_image_text" class="form-control"
                        value="{{ old('sense_one_image_text') }}">
                </div>

                <div class="form-group">
                    <label for="sense_two_image_text">Duyu Resmi Metni 2</label>
                    <input type="text" value="{{ old('sense_two_image_text') }}" name="sense_two_image_text"
                        id="sense_two_image_text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Duyu Resmi 1</label>
                    <input type="file" class="form-control" required name="sense_one_image">
                </div>

                <div class="form-group">
                    <label for="">Duyu Resmi 2</label>
                    <input type="file" class="form-control" required name="sense_two_image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
