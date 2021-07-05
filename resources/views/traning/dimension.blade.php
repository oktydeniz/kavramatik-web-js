@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')

    <div class="container mt-2">
        <input type="text" class="hiddenInput" style="display: none;" value="{{ count($data) }}">
        <div class="row">

        <?php
$col1 = "aaaa";
$col2 = "bbb";
?>
            @foreach ($data as $item)
                
            <div class="col-md-2 col-sm-6 "></div>
            <div class="col-md-4 col-sm-6 m-10">
                <div class="card card-block bg_bg mt-3 " style="width: 300px;height:400px;">
                    <img id="<?php echo $col1;  ?>" class="color_clicked imageOne"
                        src="data:image/jpeg;base64,{{ base64_encode($item->dimension_one_image) }}"
                        alt="{{ $item->dimension_one_text }}">
                    <h5 class="card-title mt-3 mb-3 category_text imageOneText">{{ $item->dimension_one_text }}</h5>
                </div>


                <script>

    
var btnSpeak = document.querySelector("#<?php echo $col1;  ?>");

var synth = window.speechSynthesis;
var voices = [];

PopulateVoices();
if(speechSynthesis !== undefined){
    speechSynthesis.onvoiceschanged = PopulateVoices;
}

btnSpeak.addEventListener('click', ()=> {
    
    var toSpeak = new SpeechSynthesisUtterance("{{ $item->dimension_one_text }}");
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
            </div>
            <div class="col-md-4 col-sm-6 m-10">
                <div class="card card-block bg_bg mt-3" style="width: 300px;height:400px;">
                    <img id="<?php echo $col2;  ?>" class="color_clicked imageTwo "
                        src="data:image/jpeg;base64,{{ base64_encode($item->dimension_two_image) }}"
                        alt="{{ $item->dimension_two_text }}">
                    <h5 class="card-title mt-3 mb-3 category_text imageTwoText">{{ $item->dimension_two_text }}</h5>
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
    
    var toSpeak = new SpeechSynthesisUtterance("{{ $item->dimension_two_text }}");
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
$col2++;
?>
            <div class="col-md-2 col-sm-6"></div>
            
            @endforeach
        </div>

    </div>
    <script>
        var size = document.querySelector('.hiddenInput').value;
        var btn = document.querySelector('.nextItem');
        var imageOne = document.querySelector('.imageOne');
        var imageTwo = document.querySelector('.imageTwo');
        var imageOneText = document.querySelector('.imageOneText');
        var imageTwoText = document.querySelector('.imageTwoText');
    </script>


@endsection
