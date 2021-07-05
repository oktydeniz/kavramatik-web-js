<x-app-layout>
    <x-slot name="header">
        Miktarlar
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('miktarlar.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Miktar İsmi</th>
                        <th scope="col">Miktar Metni</th>
                        <th scope="col">Miktar Resmi Metni 1 </th>
                        <th scope="col">Miktar Resmi  Metni 2</th>
                        <th scope="col">Miktar Resmi 1 </th>
                        <th scope="col">Miktar Resmi  2 </th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->quantitiy_name }}</td>
                            <td>{{ $item->quantitiy_text }}</td>

                            <td>{{ $item->quantitiy_one_text }}</td>
                            <td>{{ $item->quantitiy_two_text }}</td>

                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->quantitiy_one_image) }}"
                                    class="card-img-top" alt="{{ $item->quantitiy_one_text }}">
                            </td>
                            <td style="width: 100px; height:100px;"> <img
                                src="data:image/jpg;base64,{{ base64_encode($item->quantitiy_two_image) }}"
                                class="card-img-top" alt="{{ $item->quantitiy_two_text }}">
                        </td>
                            <td>
                                <a href="{{ route('miktarlar.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('miktarlar.destroy', $item->id) }}" class="btn btn-sm btn-danger"> <i
                                        class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $table->links() }}
        </div>
    </div>
</x-app-layout>
