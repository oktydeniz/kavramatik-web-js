<x-app-layout>
    <x-slot name="header">
        Sayılar
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('sayilar.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Sayı İsmi</th>
                        <th scope="col">Sayı 1 Metni </th>
                        <th scope="col">Sayı Resmi </th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->number_name }}</td>
                            <td>{{ $item->number_one_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->number_one_image) }}"
                                    class="card-img-top" alt="{{ $item->number_one_text }}">
                            </td>

                            <td>
                                <a href="{{ route('sayilar.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('sayilar.destroy', $item->id) }}" class="btn btn-sm btn-danger">
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
