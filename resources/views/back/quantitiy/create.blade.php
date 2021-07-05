<x-app-layout>
    <x-slot name="header">
        Miktar Ekle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('miktarlar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="quantitiy_name">Miktar İsmi</label>
                    <input type="text" value="{{ old('quantitiy_name') }}" name="quantitiy_name" id="quantitiy_name"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="quantitiy_text">Miktar Metni</label>
                    <input name="quantitiy_text" value="{{ old('quantitiy_text') }}" id="quantitiy_text"
                        class="form-control" >
                </div>

                <div class="form-group">
                    <label for="">Miktar Resmi 1</label>
                    <input type="file" class="form-control" required name="quantitiy_one_image">
                </div>

                <div class="form-group">
                    <label for="quantitiy_one_text">Miktar Resmi Metni 1</label>
                    <input name="quantitiy_one_text" value="{{ old('quantitiy_one_text') }}"
                        id="quantitiy_one_text" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Miktar Resmi 2</label>
                    <input type="file" class="form-control" required name="quantitiy_two_image">
                </div>

                <div class="form-group">
                    <label for="quantitiy_two_text">Miktar Resmi Metni 2</label>
                    <input name="quantitiy_two_text" value="{{ old('quantitiy_two_text') }}"
                        id="quantitiy_two_text" class="form-control">
                </div>

               

                <div class="form-group">
                    <button class="btn btn-success btn-sm btn-block" type="submit">Oluştur</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
