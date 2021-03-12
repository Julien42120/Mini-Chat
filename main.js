 
let box = document.querySelector('#scroll');
    box.scrollTop = box.scrollHeight;
    
function scrollBar(){
let box = document.querySelector('#scroll');
    box.scrollTop = box.scrollHeight;}

function autoload(){
    element = document.getElementsByClassName('containerMessage');
    $.ajax({
        url: './requetes/chargeMSG.php',
        success: function(data) {
            console.log(data);
            $('.containerMessage').html(data);
            }
        });
    }
   
    $(document).ready(function(){
    setInterval( autoload,scrollBar, 3000);
    
    });
    
    function sendMessage() {
        $.post('./insert/insertMessage.php',{
            content: $('#content'). val(),
            pseudo: $('#pseudo'). val(),
        },function(){
            document.querySelector('#content').value=''
              scrollBar()
              autoload()
        }
        )
    }

$("textarea" ).emojionePicker({

    pickerTop: 5,
      
    pickerRight: 5,
      
    type:"unicode",
      
});
