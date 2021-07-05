<x-app-layout>
    <x-slot name="header">
        Renkler
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('color.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>

            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Renk İsmi</th>
                        <th scope="col">Renk Tag</th>
                        <th scope="col">Renk</th>
                        <th scope="col">Birinci Resim</th>
                        <th scope="col">İkinci Resim</th>
                        <th scope="col">Birinci Tag</th>
                        <th scope="col">İkinci Tag</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->color_name }}</td>
                            <td>{{ $item->color_tag }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->color) }}" class="card-img-top"
                                    alt="{{ $item->color_tag }}">
                            </td>

                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->color_one) }}"
                                    class="card-img-top" alt="{{ $item->one_tag }}">
                            </td>

                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->color_two) }}"
                                    class="card-img-top" alt="{{ $item->two_tag }}">
                            </td>
                            <td>{{ $item->one_tag }}</td>
                            <td>{{ $item->two_tag }}</td>

                            <td>
                                <a href="{{ route('color.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('color.destroy', $item->id) }}" class="btn btn-sm btn-danger"> <i
                                        class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $table->links() }}
        </div>
    </div>

    {{-- <x-slot name="js">
      {{ !! Toastr::message() !!}}
    </x-slot> --}}
</x-app-layout>
