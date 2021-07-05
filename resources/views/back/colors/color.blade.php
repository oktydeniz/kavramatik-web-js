<x-app-layout>
    <x-slot name="header">
        Renkler
    </x-slot>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('renkler.create')}}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                    Oluştur</a>
                    <a href="{{route('color.index')}}" class="btn btn-sm btn-danger">
                        Renk Karşılaştırmaları</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Renk İsmi</th>
                        <th scope="col">Renk Metni</th>
                        <th scope="col">Renk Resmi</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <th> {{ $item->id }}</th>
                            <td>{{ $item->color_name }}</td>
                            <td>{{ $item->color_text }}</td>
                            <td style="width: 100px; height:100px;"> <img
                                    src="data:image/jpg;base64,{{ base64_encode($item->color_image) }}"
                                    class="card-img-top" alt="{{ $item->color_text }}">
                            </td>
                            <td>
                                <a href="{{route('renkler.edit',$item->id)}}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pen"></i></a>
                                <a href="{{ route('renkler.destroy',$item->id) }}" class="btn btn-sm btn-danger"> <i
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
