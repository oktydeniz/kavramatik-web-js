<x-app-layout>
    <x-slot name="header">
        Kategoriler
    </x-slot>
    <style>
        .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 80%;
            justify-content: space-evenly;
        }

        .items {
            background-color: #FFFFFF;
            margin: 5px;

        }

        .sectionTop {
            margin: 5px;
            padding: 5px;
        }

        p {
            text-align: center;
            font-size: 1.2rem;
            margin-top: 5px;
        }

        img {
            width: 100%;
        }

    </style>

    <div class="container">
        @foreach ($table as $item)
            <div class="items">
                <a href="{{ route($item->category_name_slug . '.index') }}">
                    <div class="sectionTop">
                        <img src="data:image/jpeg;base64,{{ base64_encode($item->category_image) }}"
                            class="card-img-top" alt="{{ $item->category_name_slug }}">
                        <div class="">
                            <p class="">{{ $item->category_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</x-app-layout>
