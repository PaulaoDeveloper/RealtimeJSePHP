
var img, colors = ['#16a085', '#2980b9', '#8e44ad', '#2c3e50', '#95a5a6', '#d35400', '#f39c12', '#f1c40f', '#e67e22', '#34495e'],
    socket = JSKhanSocket;
$('.container-login').hide();
$('#user-online-body').hide();
if (![].contains) {
    Object.defineProperty(Array.prototype, 'contains', {
        enumerable: false,
        configurable: true,
        writable: true,
        value: function(searchElement /*, fromIndex*/ ) {
            if (this === undefined || this === null) {
                throw new TypeError('Cannot convert this value to object');
            }
            var O = Object(this);
            var len = parseInt(O.length) || 0;
            if (len === 0) {
                return false;
            }
            var n = parseInt(arguments[1]) || 0;
            if (n >= len) {
                return false;
            }
            var k;
            if (n >= 0) {
                k = n;
            } else {
                k = len + n;
                if (k < 0) k = 0;
            }
            while (k < len) {
                var currentElement = O[k];
                if (searchElement === currentElement ||
                    searchElement !== searchElement && currentElement !== currentElement
                ) {
                    return true;
                }
                k++;
            }
            return false;
        }
    });
}

function getCanal() {
    if (window.location.hash.length > 0) {
        const canal = 'canal ' + window.location.hash;
        return canal;
    } else {
        const canal = 'canal global';
        return canal;
    }
}

function getColor() {
    return colors[Math.ceil(Math.random() * 10)]
}

function getPerson() {
    this.Nome = function() {
        const nome = sessionStorage.getItem('name');
        return nome.replace(/(<([^>]+)>)/ig, "");
    };
    this.Img = function() {
        const verify = document.querySelectorAll(".container-login img");
        const v = [];
        verify.forEach(function(value, index) {
            v.push(verify[index].currentSrc);
        });
        const img = (v.contains(sessionStorage.getItem('imagem'))) ? sessionStorage.getItem('imagem') : 'http://image.flaticon.com/icons/svg/163/163801.svg';
        return img.replace(/(<([^>]+)>)/ig, "");
    }
    this.Color = function() {
        const color = (colors.contains(sessionStorage.getItem('coloru'))) ? sessionStorage.getItem('coloru') : '#f2e';
        return color;
    }
}

function hAtual() {
    var dat = new Date(),
        horas = (dat.getHours() < 10) ? '0' + dat.getHours() : dat.getHours(),
        minutos = (dat.getHours() < 10) ? '0' + dat.getMinutes() : dat.getMinutes();
    return `${horas}:${minutos}`;
}

$("#gerar").on('click', function() {
    if ($('.gerado').val() == 0) {
        $(this).html('Canal Gerado');
        $(this).css('background', '#1abc9c');
        $('.gerado').val(document.location.href + '#' + Math.ceil(Math.random() * 10000));
        $('.gerado').show('slow');
    }
});

if (sessionStorage.length > 0) {
    //var n = getPerson().nome();
    //if(n == "admin"){ $("#bugou").show(); }
    $('#menu-bar-1').show();
    $('#user-online-body').show();
    $('body>div.container-login').hide();
    $('body>div.container').show();
} else {
    $('.container-login').show();
    $('#menu-bar-1').hide();
}

$("#som").on('click', function() {
    if ($(this).attr('class') == 'ativado') {
        $(this).attr('src', 'http://image.flaticon.com/icons/svg/149/149301.svg');
        $(this).attr('class', 'desativado');
    } else if ($(this).attr('class') == 'desativado') {
        $(this).attr('src', 'http://image.flaticon.com/icons/svg/149/149302.svg');
        $(this).attr('class', 'ativado');
    }
});

$("#emoji").on('click', function() {
    if ($(this).attr('class') == 'desativado') {
        $("#emojis-all").show();
        $(this).attr('class', 'ativado');
    } else if ($(this).attr('class') == 'ativado') {
        $("#emojis-all").hide();
        $(this).attr('class', 'desativado');
    }
});

$("div#emo").on('click', function() {
    $(".container>input").val($(".container>input").val() + '' + $(this).html());
});

$("#bugou").on('click', function() {
    JSKhanSocket.limpar(canal);
});

$('body>div.container-login>div>div>img').on('click', function() {
    if (typeof img == 'undefined') {
        img = $(this).attr('src');
        $(this).css('border', '3px solid blue');
    }
});
$(document).on('keydown', function(event) {
    if (event.keyCode === 13) {
        $("#bottom").click();
    }
});

$('.container-login>input').on('change', function(e) {
    var vpessoa = document.querySelectorAll('#userm');
    var pegac = [];
    vpessoa.forEach(function(value, index) {
        pegac.push(vpessoa[index].innerText);
    });
    if (pegac.contains($(this).val())) {
        alert('Esse nick ja existe!');
        $(this).val('User_' + Math.ceil(Math.random() * 10000));
    }
});

$("#sair").on('click', function() {
    sessionStorage.removeItem('name');
    sessionStorage.removeItem('imagem');
    sessionStorage.removeItem('coloru');
    location.reload();
});

$('#logar').on('click', function() {
    if ($('.container-login>input').val().length > 2 && typeof img != 'undefined') {
        nome = $('body>div.container-login>input').val();
        var colllor = getColor();
        sessionStorage.setItem('name', nome);
        sessionStorage.setItem('imagem', img);
        sessionStorage.setItem('coloru', colllor);
        socket.enviar('usuarios', [sessionStorage.getItem('name'), sessionStorage.getItem('imagem'), colllor, hAtual()], function(r) {
            console.log(r);
        });
        $('body>div.container-login').hide();
        $('body>div.container').show();
        $('#menu-bar-1').show();
        $('#user-online-body').show();
    }
});

socket.receber('usuarios', function(data) {
    var dt = data['usuarios'];
    $.each(dt, function(index, value) {
        var [nom, imgm, bgc, hor] = value;
        socket.verifica('#msgs-body', 'O Usuario ' + nom + ' Entrou No Chat!', function() {
            $("#msgs-body").append(`<div id="msgs-body-m" style="background:${bgc} !important;color: white !important;font-weight:bold"><div id="userm"><img src="${imgm}"/><h4>${nom}</h4></div><div id="mensa-gem"><h3>O Usuario ${nom} Entrou No Chat!</h3><div id="temp">Enviado as ${hor}</div></div></div>`);
        });
        socket.verifica('#ons-us', nom, function() {
            $("#ons-us").append(`<div id="ons-u"><img src="${imgm}"/><h4>${nom}</h4></div>`);
            var ons = document.querySelectorAll('#ons-u');
            if (ons.length > 5) {
                $("#ons").css('overflow-y', 'scroll');
            }
        });
    });
});
$("#ons-btn").click(function() {
    $("#user-online-body").toggle('slow');
});
socket.receber(getCanal(), function(data) {
    if (document.querySelectorAll('#msgs-body-m').length > 150) {
        setTimeout(function() {
            JSKhanSocket.limpar(getCanal());
        }, 5000);
    }
    var d = data[getCanal()];
    $.each(d, function(index, value) {
        var [na, me, im, ho, bg] = value;
        socket.verifica('#msgs-body', me, function() {
            $("#msgs-body").append(`<div id="msgs-body-m" style="background:${bg} !important"><div id="userm"><img src="${im}"/><h4>${na}</h4></div><div id="mensa-gem">${me}<div id="temp">Enviado as ${ho}</div></div></div>`);
            if (sessionStorage.length > 0) {
                if ($("#som").attr('class') == 'ativado') {
                    document.getElementsByTagName('audio')[0].play();
                }
            }
            $("#msgs-body").animate({
                scrollTop: $('#msgs-body')[0].scrollHeight
            }, 500);
        });
    });
});
$("#bottom").on('click', function() {
    if ($(".container>input").val().length > 3) {
        var antiFlood = $("#msgs-body").html().toString().split(' ');
        if (!antiFlood.contains($(".container>input").val())) {
            var menviar = $(".container>input").val(),
                pessoa = new getPerson();
            menviar = menviar.replace(/(<([^>]+)>)/ig, "");
            menviar = menviar.replace(/[\\"'><]/g, '');
            socket.enviar(getCanal(), [pessoa.Nome(), menviar, pessoa.Img(), hAtual, pessoa.Color()], function(cb) {
                var dtd = (cb == 'sucesso') ? 'Enviado Ao Socket Com Sucesso' : 'Erro ao Enviar Ao Socket';
                console.log(dtd);
                $(".container>input").val('');
            });
        } else {
            $(".container>input").val('');
            console.log("Anti Flood");
            $(".container>input").attr('placeholder', 'Opaa , Sem Flood !');
        }
    }
});
