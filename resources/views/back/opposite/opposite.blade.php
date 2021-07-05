<x-app-layout>
    <x-slot name="header">
        Zıt Kavramlar
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('zit_kavramlar.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Kavram İsmi</th>
                        <th scope="col">Kavram Resmi Metni 1</th>
                        <th scope="col">Kavram Resmi Metni 2</th>
                        <th scope="col"> Kavram Resmi 1</th>
                        <th scope="col">Kavram Resmi 2 </th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->opposite_name }}</td>
                            <td>{{ $item->opposite_one_image_text }}</td>
                            <td>{{ $item->opposite_two_image_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->opposite_one_image) }}"
                                    class="card-img-top" alt="{{ $item->opposite_one_image_text }}">
                            </td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->opposite_two_image) }}"
                                    class="card-img-top" alt="{{ $item->opposite_two_image_text }}">
                            </td>
                            
                            <td>
                                <a href="{{ route('zit_kavramlar.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('zit_kavramlar.destroy', $item->id) }}" class="btn btn-sm btn-danger">
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
