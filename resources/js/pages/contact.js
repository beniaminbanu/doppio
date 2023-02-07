$(document).ready(function () {
//Reservation
$('.input').keyup(function () {
    if ($(this).val()) {
        $(this).parent().addClass('active-input');
    } else {
        $(this).parent().removeClass('active-input');
    }
})

$(function () {
    $(':input[type="number"]').click(function () {
        if ($(this).val()) {
            $(this).parent().addClass('active-input');
        } else {
            $(this).parent().removeClass('active-input');
        }
    });
});

$('#timePicker').keyup(function () {
    if ($(this).val()) {
        $('.close-svg').addClass('active-svg');
    } else {
        $('.close-svg').removeClass('active-svg');
    }
})

$('.close-svg').click(function() {
    $('#timePicker').val('');
    $('#input-timepicker').removeClass('active-input');
    $(this).removeClass('active-svg');
    $('.reservation').removeClass('active-btn-reservation');
});


$('.input-check').on('keyup', function () {
    if (isNull() === true) {
        $('.reservation').removeClass('active-btn-reservation');
    } else {
        $('.reservation').addClass('active-btn-reservation');
    }
});
function isNull() {
    let inputsNull = false;

    $("form#myForm :input").each(function () {
        if ($(this).val() === "") {
            inputsNull = true;
        }
    });

    return inputsNull;
}
//Timepicker
function timePicker(id) {
    var input = document.getElementById(id);
    var timePicker = document.createElement('div');
    timePicker.classList.add('time-picker');
    //open timepicker
    input.onclick = function () {
        timePicker.classList.toggle('open');
        this.setAttribute('disabled', 'disabled');
        timePicker.innerHTML += `
        <div class="set-time">
            <div class="label">
                <a id="plusH" >+</a>
                <input class="set" type="text" id="hour" value="08" min="00" max="24">
                <a id="minusH">-</a>
            </div>
            <div class="label">
                <a id="plusM">+</a>
                <input class="set" type="text" id="minute" value="30" min="00" max="60">
                <a id="minusM">-</a>
            </div>
        </div>
        <div id="submitTime">Set time</div>`;
        this.after(timePicker);
        var plusH = document.getElementById('plusH');
        var minusH = document.getElementById('minusH');
        var plusM = document.getElementById('plusM');
        var minusM = document.getElementById('minusM');
        var h = parseInt(document.getElementById('hour').value);
        var m = parseInt(document.getElementById('minute').value);
        //increment hour
        plusH.onclick = function () {
            h = isNaN(h) ? 0 : h;
            if (h === 23) {
                h = -1;
            }
            h++;
            document.getElementById('hour').value = (h < 10 ? '0' : 0) + h;
        }
        //decrement hour
        minusH.onclick = function () {
            h = isNaN(h) ? 0 : h;
            if (h === 0) {
                h = 24;
            }
            h--;
            document.getElementById('hour').value = (h < 10 ? '0' : 0) + h;
        }
        //increment minutes
        plusM.onclick = function () {
            m = isNaN(m) ? 0 : m;
            if (m === 45) {
                m = -15;
            }
            m = m + 15;
            document.getElementById('minute').value = (m < 10 ? '0' : 0) + m;
        }
        //decrement minutes
        minusM.onclick = function () {
            m = isNaN(m) ? 0 : m;
            if (m === 0) {
                m = 60;
            }
            m = m - 15;
            document.getElementById('minute').value = (m < 10 ? '0' : 0) + m;
        }
        //if hour > 23 or minute >59
        const regHour = new RegExp('^([0-1]?[0-9]|2[0-3])$');
        const regMinute = new RegExp('^[0-5]?[0-9]$');
        $('#hour').keyup(function () {
            if (!$(this).val().match(regHour)) {
                $(this).val('');
                $('#submitTime').css('pointer-events', 'none');
            } else {
                $('#submitTime').css('pointer-events', 'all');
            }
        })
        $('#minute').keyup(function () {
            if (!$(this).val().match(regMinute)) {
                $(this).val('');
                $('#submitTime').css('pointer-events', 'none');
            } else{
                $('#submitTime').css('pointer-events', 'all');
            }
        })
        //submit timepicker
        var submit = document.getElementById("submitTime");
        submit.onclick = function () {
            input.value = document.getElementById('hour').value + ':' + document.getElementById('minute').value;
            input.removeAttribute('disabled');
            timePicker.classList.toggle('open');
            timePicker.innerHTML = '';
        }

        $('#submitTime').click(function () {
            $('#input-timepicker').addClass('active-input');
            $('.close-svg').addClass('active-svg');
            if (isNull() === true) {
                $('.reservation').removeClass('active-btn-reservation');
            } else {
                $('.reservation').addClass('active-btn-reservation');
            }
        })
    }
}
timePicker('timePicker');
});
