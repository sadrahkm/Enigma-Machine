var cables = [];
$(document).ready(function () {
    $('form#enigma input[type=text]').keyup(function (event) {
        let plain = $(this).val();
        if (plain.length === 1) {
            if (cables.length) {
            var cabledIndex = isCharInCables(plain);
            if (cabledIndex !== -1) {
                if (cables[cabledIndex].first === plain) {
                    plain = cables[cabledIndex].last;
                } else if (cables[cabledIndex].last === plain) {
                    plain = cables[cabledIndex].first;
                }
            }
        }
            $.ajax({
                method: "POST",
                url: "machine.php",
                data: {data: plain}
            }).done(function (result) {
                if (cables.length) {
                    var cabledIndex = isCharInCables(result);
                    if (cabledIndex !== -1) {
                        if (cables[cabledIndex].first === result) {
                            result = cables[cabledIndex].last;
                        } else if (cables[cabledIndex].last === result) {
                            result = cables[cabledIndex].first;
                        }
                    }
                }
                $('.top_keyboard span[name=' + result + ']').css({'background-color': "#cebc26"});
                setTimeout(function () {
                    $('.top_keyboard span[name=' + result + ']').css({'background-color': "#403c39"});
                }, 2000);
            }).fail(function (result) {
                alert("Nope...");
            });
        }
        $(this).val('');
    });

    $(".plugboard p").click(function (e) {
        let currentColor = "rgb(" + getRand(0, 255) + "," + getRand(0, 255) + "," + getRand(0, 255) + ")";
        let char = $(this).data('value');
        let toRemoveSocketIndex = areSocketsNotReady(char);
        if (toRemoveSocketIndex !== -1) {
            if (cables[toRemoveSocketIndex].first === char) {
                cables[toRemoveSocketIndex].first = undefined;
            } else {
                cables[toRemoveSocketIndex].last = undefined;
            }
            $(this).children('span').css({"background-color": "white"});
        } else {
            let index = areSocketsNotReady(undefined);
            if (index !== -1) {
                currentColor = cables[index].color;
                if (cables[index].first === undefined) {
                    cables[index].first = char;
                } else {
                    cables[index].last = char;
                }
            } else {
                cables.push(new Socket(char, currentColor));
            }
            $(this).children('span').css({"background-color": currentColor});
        }
    });

    function getRand(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    function areSocketsNotReady(cond) {
        let item = -1;
        if (cables.length) {
            cables.forEach(function (value, index) {
                if (value.first === cond || value.last === cond) {
                    item = index;
                    return item;
                }
            });
        }
        return item;
    }

    function isCharInCables(char) {
        return areSocketsNotReady(char);
    }


});


function Socket(first, color, last) {
    this.first = first;
    this.last = last;
    this.color = color;
}

