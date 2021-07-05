<x-app-layout>
    <x-slot name="header">
        Boyutlar
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('boyutlar.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Boyut İsmi</th>
                        <th scope="col">Boyut Metni</th>
                        <th scope="col">Karşılaştırma 1 </th>
                        <th scope="col">Karşılaştırma 2 </th>
                        <th scope="col">Karşılaştırma 1 Metni </th>
                        <th scope="col">Karşılaştırma 2 Metni</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->dimension_name }}</td>
                            <td>{{ $item->dimension_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->dimension_one_image) }}"
                                    class="card-img-top" alt="{{ $item->dimension_one_text }}">
                            </td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->dimension_two_image) }}"
                                    class="card-img-top" alt="{{ $item->dimension_two_text }}">
                            </td>
                            <td>{{ $item->dimension_one_text }}</td>
                            <td>{{ $item->dimension_two_text }}</td>
                            <td>
                                <a href="{{ route('boyutlar.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('boyutlar.destroy', $item->id) }}" class="btn btn-sm btn-danger">
                                    <i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $table->links() }}
        </div>
    </div>
</x-app-layout>
