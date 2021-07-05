@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')

    <div class="container mt-2">
        <a href="{{route('eslestirme.renkler')}}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
            Eşleştirme</a>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-3 col-sm-6 mt-5">
                    <div class="card card-block bg_bg ">
                        <img id="{{ $item->color_name }}" class="color_clicked" text="{{ $item->color_name }}"
                            src="data:image/jpeg;base64,{{ base64_encode($item->color_image) }}"
                            alt="{{ $item->color_name }}">
                        <h5 class="card-title mt-3 mb-3 category_text">{{ $item->color_name }}</h5>
                    </div>
                </div>

                <script>

    
var btnSpeak = document.querySelector('#{{ $item->color_name }}');
var synth = window.speechSynthesis;
var voices = [];

PopulateVoices();
if(speechSynthesis !== undefined){
    speechSynthesis.onvoiceschanged = PopulateVoices;
}

btnSpeak.addEventListener('click', ()=> {
    var toSpeak = new SpeechSynthesisUtterance("{{ $item->color_name }}");
    var selectedVoiceName = "Microsoft Tolga - Turkish (Turkey)"
    voices.forEach((voice)=>{
        if(voice.name === selectedVoiceName){
            voice.name
            toSpeak.voice = voice;
        }
    });
    synth.speak(toSpeak);
});

function PopulateVoices(){
    voices = synth.getVoices();
    var selectedIndex = 22;

    voices.forEach((voice)=>{
        var listItem = document.createElement('option');
        listItem.textContent = voice.name;
        listItem.setAttribute('data-lang', voice.lang);
        listItem.setAttribute('data-name', voice.name);
     
    });

       
}
</script>

            @endforeach
        </div>
    </div>




    <script>
    var image = document.getElementsByClassName("color_clicked");
    var row = document.getElementsByClassName('col-md-3 col-sm-6');

    function clickfunction(dd) {
        console.log(dd);
    }
   /* for (i = 0; i < image.length; i++) {
        clickfunction(image[i].attributes.alt.value);
        image[i].onclick = function() {
            console.log(i);
            
           
        };

    }*/
    
</script>
@endsection
