@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')


    <link href="https://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css" rel="stylesheet">
   
    <style>
    *{
        box-sizing: border-box;
		
    }
    #wrapper123{
        display:flex;
		width: 60%;
		height: 95vh;
		flex: 1 1 0;
		border: 3px solid greenyellow;
		justify-content: space-around;
		margin: 0 auto;
		padding-left: 13vw;
    }
    #images{
        display: flex;
        width: 7vw;
        flex-direction: column;
        /*border: 1px solid red;*/
		justify-content: space-between;
    }
    
    #names{
        display: flex;
        flex-direction: column;
        width: 7vw;
		height: 100%;
        margin-top: 240px;
    }
	
	#Image1{
		margin-top: 0;
		
	}
	
	 #raspberries{
		margin-bottom: 0;
	 }
	 
    #names p{
        
		border: 1px solid green;
	
		text-align: center;
		line-height: 5vw;
		color: Red;
		font-weight: 500;
		font-size: 1.1vw;
		background-color: #ddd;
		margin: 0;
     
	}
	#drop{
		position: absolute;
		top: 45vh;
		left: 5vw;
		
		font-size: 1.6vw;
		font-weight: bold;
		color: rgb(116, 35, 35);
		border: 2px dotted gold;
	}

	@media only screen and (orientation: portrait) {
		#wrapper123{
			width: 100%;
			height: 80vh;
		}
		
		#images {
			width: 7vh;
			
		}
		img{
			width: 7vh;
			height: 6vh;
		}
		#names{
       		width: 19vh;
			height: 100%;
		}
		#names p{
        	height: 6vh;
		}
		#drop{
			top: 38vh;
			left: -8vh;	
		}
	}
    </style>


<script>
  var numberss = [];
  var findex =0;
</script>

        <?php
$col1 = "aaaa";
$col2 = "bbb";
?>


     <div id="wrapper123">
        <div id="images">
            <img width="150" height="150" id="Image12" src="">
   
            <img width="150" height="150" id="Image22" src="">
        </div>   

        <div id="names">
            
			<div >
          
          
			</div>
          
            <div width="150" height="150"  id="Image1">
            <img width="150" height="150" id="Image11" src="">
          
			</div>
          

		</div>  

		<div id="display">

		</div>
		<div id="drop">
		
		</div>
        
    </div>

    @foreach ($data as $item)

<script>
datas = "{{ base64_encode($item->direction_image) }}";
numberss[findex]= datas;
findex++;
console.log(findex);
console.log(numberss[findex]);
var index = 0;


 </script>
 <script>




                                </script>

@endforeach
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>


    function game(arg){


					
        $(document).ready(function(){
					let count = 0;
                    document.getElementById("Image12").src="data:image/jpeg;base64,"+numberss[index];
    document.getElementById("Image11").src="data:image/jpeg;base64,"+numberss[index]; 
    document.getElementById("Image22").src="data:image/jpeg;base64,"+numberss[index+1]; 
					
			
					
					function displayResult(arg){
					
						let display = $('#display');
						if(arg == 1){
							
							display.html(`<p style="color: green; text-align: center; font-weight: bold">Tebrikler <br/> Doğru olanı buldun</p>`).dialog({width:200,resizeable:false, modal: true});
                            
						}else{
							
						}
					}
    	
					$('img').draggable({
						helper: 'clone',
						revert: function(isValid){	
								if(!isValid){
								document.getElementById("Image12").src="data:image/jpeg;base64,"+numberss[index];
    document.getElementById("Image11").src="data:image/jpeg;base64,"+numberss[index]; 
    document.getElementById("Image22").src="data:image/jpeg;base64,"+numberss[index+1]; 
                   					
               					} 
							}			
					})

					$('#names div').droppable({
						accept: function(e){
						let container = this.id + 2
							
							if(e.attr("id")== container){			
                                    return true;
							}										
						},

						drop: function(event, ui){
							//console.log(event.target.id)
						
							count++;
                            index++;    
                            
							displayResult(count)	
                            count=0;
                            if(index < 22){
                                game();
                            }
                           
						}
						
					})			
            })	
                }
                game();
                
           
        </script>


<script> 

/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
(function ($) {

// Detect touch support
$.support.touch = 'ontouchend' in document;

// Ignore browsers without touch support
if (!$.support.touch) {
  return;
}

var mouseProto = $.ui.mouse.prototype,
    _mouseInit = mouseProto._mouseInit,
    _mouseDestroy = mouseProto._mouseDestroy,
    touchHandled;

/**
 * Simulate a mouse event based on a corresponding touch event
 * @param {Object} event A touch event
 * @param {String} simulatedType The corresponding mouse event
 */
function simulateMouseEvent (event, simulatedType) {

  // Ignore multi-touch events
  if (event.originalEvent.touches.length > 1) {
    return;
  }

  event.preventDefault();

  var touch = event.originalEvent.changedTouches[0],
      simulatedEvent = document.createEvent('MouseEvents');
  
  // Initialize the simulated mouse event using the touch event's coordinates
  simulatedEvent.initMouseEvent(
    simulatedType,    // type
    true,             // bubbles                    
    true,             // cancelable                 
    window,           // view                       
    1,                // detail                     
    touch.screenX,    // screenX                    
    touch.screenY,    // screenY                    
    touch.clientX,    // clientX                    
    touch.clientY,    // clientY                    
    false,            // ctrlKey                    
    false,            // altKey                     
    false,            // shiftKey                   
    false,            // metaKey                    
    0,                // button                     
    null              // relatedTarget              
  );

  // Dispatch the simulated event to the target element
  event.target.dispatchEvent(simulatedEvent);
}

/**
 * Handle the jQuery UI widget's touchstart events
 * @param {Object} event The widget element's touchstart event
 */
mouseProto._touchStart = function (event) {

  var self = this;

  // Ignore the event if another widget is already being handled
  if (touchHandled || !self._mouseCapture(event.originalEvent.changedTouches[0])) {
    return;
  }

  // Set the flag to prevent other widgets from inheriting the touch event
  touchHandled = true;

  // Track movement to determine if interaction was a click
  self._touchMoved = false;

  // Simulate the mouseover event
  simulateMouseEvent(event, 'mouseover');

  // Simulate the mousemove event
  simulateMouseEvent(event, 'mousemove');

  // Simulate the mousedown event
  simulateMouseEvent(event, 'mousedown');
};

/**
 * Handle the jQuery UI widget's touchmove events
 * @param {Object} event The document's touchmove event
 */
mouseProto._touchMove = function (event) {

  // Ignore event if not handled
  if (!touchHandled) {
    return;
  }

  // Interaction was not a click
  this._touchMoved = true;

  // Simulate the mousemove event
  simulateMouseEvent(event, 'mousemove');
};

/**
 * Handle the jQuery UI widget's touchend events
 * @param {Object} event The document's touchend event
 */
mouseProto._touchEnd = function (event) {

  // Ignore event if not handled
  if (!touchHandled) {
    return;
  }

  // Simulate the mouseup event
  simulateMouseEvent(event, 'mouseup');

  // Simulate the mouseout event
  simulateMouseEvent(event, 'mouseout');

  // If the touch interaction did not move, it should trigger a click
  if (!this._touchMoved) {

    // Simulate the click event
    simulateMouseEvent(event, 'click');
  }

  // Unset the flag to allow other widgets to inherit the touch event
  touchHandled = false;
};

/**
 * A duck punch of the $.ui.mouse _mouseInit method to support touch events.
 * This method extends the widget with bound touch event handlers that
 * translate touch events to mouse events and pass them to the widget's
 * original mouse event handling methods.
 */
mouseProto._mouseInit = function () {
  
  var self = this;

  // Delegate the touch handlers to the widget's element
  self.element.bind({
    touchstart: $.proxy(self, '_touchStart'),
    touchmove: $.proxy(self, '_touchMove'),
    touchend: $.proxy(self, '_touchEnd')
  });

  // Call the original $.ui.mouse init method
  _mouseInit.call(self);
};

/**
 * Remove the touch event handlers
 */
mouseProto._mouseDestroy = function () {
  
  var self = this;

  // Delegate the touch handlers to the widget's element
  self.element.unbind({
    touchstart: $.proxy(self, '_touchStart'),
    touchmove: $.proxy(self, '_touchMove'),
    touchend: $.proxy(self, '_touchEnd')
  });

  // Call the original $.ui.mouse destroy method
  _mouseDestroy.call(self);
};

})(jQuery);


</script>

@endsection
