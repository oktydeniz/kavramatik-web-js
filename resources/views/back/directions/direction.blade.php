<x-app-layout>
    <x-slot name="header">
        Yönler
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('yonler.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Yön İsmi</th>
                        <th scope="col">Yön Metni</th>
                        <th scope="col">Yön Resmi</th>
                        <th scope="col">Yön Metni 2 </th>
                        <th scope="col">Yön Resmi 2 </th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->direction_name }}</td>
                            <td>{{ $item->direction_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->direction_image) }}"
                                    class="card-img-top" alt="{{ $item->direction_name }}">
                            </td>
                            <td>{{ $item->direction_two_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->direction_two) }}"
                                    class="card-img-top" alt="{{ $item->direction_two_text }}">
                            </td>
                            <td>
                                <a href="{{ route('yonler.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('yonler.destroy', $item->id) }}" class="btn btn-sm btn-danger"> <i
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
