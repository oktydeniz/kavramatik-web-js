@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')

    <div class="container mt-2">
        <a href="{{route('eslestirme.rakamlar')}}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
            Eşleştirme</a>
        <div class="row">

        <?php
$col1 = "aaaa";
$col2 = "bbb";
?>
            @foreach ($data as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="card card-block bg_bg mt-3 " style="width: 250px;height:400px;">
                        <img id="<?php echo $col2;  ?>" class="color_clicked"
                            src="data:image/jpeg;base64,{{ base64_encode($item->number_one_image) }}"
                            alt="{{ $item->number_one_text }}">
                        <h5 class="card-title  category_text">{{ $item->number_one_text }}</h5>
                    </div>
                </div>
                <script>

    
var btnSpeak = document.querySelector("#<?php echo $col2;  ?>");
var synth = window.speechSynthesis;
var voices = [];

PopulateVoices();
if(speechSynthesis !== undefined){
    speechSynthesis.onvoiceschanged = PopulateVoices;
}

btnSpeak.addEventListener('click', ()=> {
    var toSpeak = new SpeechSynthesisUtterance("{{ $item->number_one_text }}");
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

<?php
$col1++;
$col2 ++;
?>
            @endforeach

        </div>
    </div>
@endsection
