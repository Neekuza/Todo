(function($) {


    //some variabiles ktoré si nastavujem

    function getRootUrl() { //nájde root v servery
        return window.location.origin;
    }

    function getBaseUrl() { //nájde priečinok
        var re = new RegExp(/^.*\//);
        return re.exec(window.location.href)[0];
    }


    //insertovanie form
    var form = $('#add-form'); //zadefinujem formulár
    var input = form.find('#text'); //zadefinujem pridanú hodnotu do todo listu
    var list = $('#item-list'); //nájdem ul zoznam ktorý má id item-list

    input.val('').focus(); //chceme aby po odoslaní nového elementu bol formulár prázdny a autofocusovaný, preto mu zadefinujeme prázdnu hodnotu


    //settings


    var animation = {
        startColor: '#00bc8c',
        endColor: '#303030',
        delay: 200
    }


    //doin stuff

    form.on('submit', function(event) {
        event.preventDefault(); //zabránim odoslaniu formuláru do add-new

        var req = $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(), // (small) nech si sám zistí aké dáta boli odoslané, nebudeme mu ich predsa všetky vypisovať v kóde, však?
            dataType: 'json'
        }); //ukážem ajaxu čo má robiť, keďže NEODOSIELAM formulár a on to potrebuje vedieť


        req.done(function(data) {
            console.log(data)

            $.ajax({ url: baseUrl }).done(function(html) {
                var newItem = $(html).find('li:last-child'); //nájdeme posledný element a chcem aby ho refreshhol na pozadí

                newItem.appendTo(list) //pridáme nový element a ešte nejakú fajunovú animáciu
                    .css({ backgroundColor: animation.startColor })
                    .delay(animation.delay)
                    .animate({ backgroundColor: animation.endColor });

                input.val('').focus();
            });


            // var li = $('<li class="list-group-item">' + input.val() + '</li>');

            // li.appendTo('.list-group') //pridáme nový element a ešte nejakú fajunovú animáciu
            //     .css({ backgroundColor: '#00bc8c' })
            //     .delay(200)
            //     .animate({ backgroundColor: '#303030' });
        });

    });
    input.on('keypress', function(event) {
        if (event.which === 13) { //číslo pre ENTER je 13
            form.submit(); //nech sa potvrdí po stlačení ENTER
            return false; //pretože nechceme odoslať ENTER
        }
    });

    $('#delete-form').on('submit', function(event) {
        return confirm('Si si kurva istý???');
    });



}(jQuery));