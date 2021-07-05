<x-app-layout>
    <x-slot name="header">
        Duyular
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('duyular.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Duyu İsmi</th>
                        <th scope="col">Duyu Resmi Metni 1</th>
                        <th scope="col">Duyu Resmi Metni 2</th>
                        <th scope="col"> Duyu Resmi 1</th>
                        <th scope="col">Duyu Resmi 2 </th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->sense_name }}</td>
                            <td>{{ $item->sense_one_image_text }}</td>
                            <td>{{ $item->sense_two_image_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->sense_one_image) }}"
                                    class="card-img-top" alt="{{ $item->sense_one_image_text }}">
                            </td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->sense_two_image) }}"
                                    class="card-img-top" alt="{{ $item->sense_two_image_text }}">
                            </td>
                            
                            <td>
                                <a href="{{ route('duyular.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('duyular.destroy', $item->id) }}" class="btn btn-sm btn-danger">
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
