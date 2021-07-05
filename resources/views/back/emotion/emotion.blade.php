<x-app-layout>
    <x-slot name="header">
        Duygular
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('duygular.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Duygu İsmi</th>
                        <th scope="col">Duygu Metni</th>
                        <th scope="col">Duygu Resmi</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->emotion_name }}</td>
                            <td>{{ $item->emotion_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->emotion_image) }}"
                                    class="card-img-top" alt="{{ $item->emotion_name }}">
                            </td>
                            <td>
                                <a href="{{ route('duygular.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('duygular.destroy', $item->id) }}" class="btn btn-sm btn-danger"> <i
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
